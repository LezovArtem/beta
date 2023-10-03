<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

final class PostRepository
{
    public function create(array $data): void
    {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tagIds);

            DB::commit();

        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
    public function updatePost(array $data, Post $post): void
    {
        try {
            DB::beginTransaction();

            if (isset($data['tag_ids'])){
                $tagIds = $data['tag_ids'];
                unset($data['tag_ids']);
            }

            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);


            $post->update($data);
            $post->tags()->sync($tagIds);

            DB::commit();
        } catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
}
