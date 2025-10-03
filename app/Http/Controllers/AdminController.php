<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display admin dashboard with contact submissions.
     */
    public function index(Request $request)
    {
        $query = ContactSubmission::query();

        // Filter by read status
        if ($request->has('status')) {
            if ($request->status === 'unread') {
                $query->where('is_read', false);
            } elseif ($request->status === 'read') {
                $query->where('is_read', true);
            }
        }

        // Filter by archived
        if ($request->has('archived') && $request->archived === '1') {
            $query->whereNotNull('archived_at');
        } else {
            $query->whereNull('archived_at');
        }

        // Search
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $submissions = $query->latest()->paginate(20);
        $unreadCount = ContactSubmission::where('is_read', false)
            ->whereNull('archived_at')
            ->count();

        return view('admin.submissions.index', compact('submissions', 'unreadCount'));
    }

    /**
     * Display the specified contact submission.
     */
    public function show(ContactSubmission $submission)
    {
        // Mark as read when viewing
        if (!$submission->is_read) {
            $submission->update(['is_read' => true]);
        }

        return view('admin.submissions.show', compact('submission'));
    }

    /**
     * Toggle read status of submission.
     */
    public function toggleRead(ContactSubmission $submission)
    {
        $submission->update(['is_read' => !$submission->is_read]);

        return back()->with('success', 'Status updated successfully.');
    }

    /**
     * Archive the specified submission.
     */
    public function archive(ContactSubmission $submission)
    {
        $submission->update(['archived_at' => now()]);

        return back()->with('success', 'Submission archived successfully.');
    }

    /**
     * Unarchive the specified submission.
     */
    public function unarchive(ContactSubmission $submission)
    {
        $submission->update(['archived_at' => null]);

        return back()->with('success', 'Submission unarchived successfully.');
    }

    /**
     * Delete the specified submission.
     */
    public function destroy(ContactSubmission $submission)
    {
        $submission->delete();

        return redirect()->route('admin.submissions.index')
            ->with('success', 'Submission deleted successfully.');
    }
}
