<?php

namespace App\Http\Resources;

use DateTime;
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
        $completed_at = new DateTime($this->completed_at);
        $failed_at = new DateTime($this->failed_at);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'points' => $this->points,
            'limit_hours' => $this->limit_hours,
            'limit_date' => $this->limit_date,
            'completed_at' => $this->completed_at !== null ? $completed_at->format('d/m/Y') : null,
            'failed_at' => $this->failed_at !== null ? $failed_at->format('d/m/Y') : null,
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
