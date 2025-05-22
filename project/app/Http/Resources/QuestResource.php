<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $request->id,
            'created_at' => $request->created_at,
            'title' => $request->title,
            'description' => $request->description,
            'points' => $request->points,
            'completed' => $request->completed,
            'completed_at' => $request->completed_at,
        ];
    }
}
