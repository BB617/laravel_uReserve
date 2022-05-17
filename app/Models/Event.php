<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use League\CommonMark\Extension\Attributes\Parser\AttributesBlockContinueParser;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'information',
        'max_people',
        'start_date',
        'end_date',
        'is_visible',
    ];

    public function eventDate(): Attribute
    {
        return new Attribute(
            get: fn () => Carbon::parse($this->start_date)->format("Y年m月d日"),
        );
    }

    public function editEventDate(): Attribute
    {
        return new Attribute(
            get: fn () => Carbon::parse($this->start_date)->format("Y-m-d"),
        );
    }

    public function startTime(): Attribute
    {
        return new Attribute(
            get: fn () => Carbon::parse($this->start_date)->format("H時i分"),
        );
    }

    public function endTime(): Attribute
    {
        return new Attribute(
            get: fn () => Carbon::parse($this->end_date)->format("H時i分"),
        );
    }
}
