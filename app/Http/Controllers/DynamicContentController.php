<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Setting;
use App\Models\Section;

class DynamicContentController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'title_tag' => 'required|in:h1,h2,h3,h4,h5,h6'
        ]);

        // Section::firstOrCreate([], ['title_tag' => $request->title_tag])->update(['title_tag' => $request->title_tag]);
        $title_tag = Section::find($request->id) ?? new Section();
        $title_tag->title_tag = $request->title_tag;
        $title_tag->save();

        return response()->json(['success' => true]);
    }
    public function updateContent(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',
            'content' => 'required|string'
        ]);

        // Find content section by ID or create a new instance
        $content = Section::find($request->id) ?? new Section();

        // Set values
        // $content->titleTag = $request->titleTag;
        $content->content = $request->content;
        
        // Save to database
        $content->save();

        return response()->json([
            'success' => true,
            'message' => $request->id ? 'Content updated' : 'Content created',
            'id' => $content->id // Ensure the frontend knows the correct ID
        ]);
    }
    public function updateTitleContent(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer',
            'title' => 'required|string'
        ]);

        // Find content section by ID or create a new instance
        $title_content = Section::find($request->id) ?? new Section();
        $title_content->title  = $request->title;
        
        // Save to database
        $title_content ->save();

        return response()->json([
            'success' => true,
            'message' => $request->id ? 'Title content updated' : 'Title content created',
            'id' => $title_content ->id // Ensure the frontend knows the correct ID
        ]);
    }
}
