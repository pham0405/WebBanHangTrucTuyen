<?php
namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $productId)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        try {
            $comment = new Comment();
            $comment->product_id = $productId;
            $comment->user_id = Auth::id();
            $comment->content = $request->input('content');
            $comment->save();

            return redirect()->route('products.detail', ['id' => $productId])
                ->with('success', 'Bình luận đã được thêm thành công.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra: ' . $e->getMessage()]);
        }
    }
}
