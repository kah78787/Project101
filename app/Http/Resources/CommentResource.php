<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'text'=>$this->text,
            'username' => $this->whenLoaded('user', $this->user->fullName()),
            'user_id' => $this->whenLoaded('user_id', $this->user->userId()),
            'created_at'=>$this->created_at->toISO8601String(),

        ];
    }
}
