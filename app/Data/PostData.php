<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Carbon\CarbonImmutable;
use App\Enums\PostStatus;

class PostData extends Data
{
    public function __construct(
      public string $title,
        public string $content,
        public PostStatus $status,
        public ?CarbonImmutable $published_at
    ) {}
}
