<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DynamicContentController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'title_tag' => 'required|in:h1,h2,h3,h4,h5,h6',
        ]);

        $section = Section::find($request->id) ?? new Section();
        $section->title_tag = $request->title_tag;
        $section->last_updated_by = Auth::id();
        $section->save();

        Session::flash('toast_message', 'Heading updated successfully!');
        Session::flash('toast_title', 'Success');
        Session::flash('toast_type', 'success');

        return response()->json(['success' => true]);
    }

    public function updateContent(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'content' => 'required|string',
        ]);

        $section = Section::find($request->id) ?? new Section();
        $section->content = $request->content;
        $section->last_updated_by = Auth::id();
        $section->save();

        Session::flash('toast_message', 'Content updated successfully!');
        Session::flash('toast_title', 'Success');
        Session::flash('toast_type', 'success');

        return response()->json(['success' => true, 'message' => 'Content updated', 'id' => $section->id]);
    }

    public function updateTitleContent(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string',
        ]);

        $section = Section::find($request->id) ?? new Section();
        $section->title = $request->title;
        $section->last_updated_by = Auth::id();
        $section->save();

        Session::flash('toast_message', 'Title updated successfully!');
        Session::flash('toast_title', 'Success');
        Session::flash('toast_type', 'success');

        return response()->json(['success' => true, 'message' => 'Title updated', 'id' => $section->id]);
    }
}
