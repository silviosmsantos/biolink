<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    public function moveDown()
    {
        $this->move(+1);
    }


    /**
     * Swap the order of the link with the link $to positions above/below it.
     *
     * @param int $to The number of positions to move the link. Negative to move up, positive to move down.
     *
     * @return void
     */
    private function move(int $offset): void 
    {
         $this->load('user'); 

        if (!$this->user) {
            return; 
        }

        $swapLink = $this->user->links()
            ->where('order', $this->order + $offset)
            ->first();

        if ($swapLink) {
            $swapLink->fill(['order' => $this->order])->save();
            $this->fill(['order' => $this->order + $offset])->save();
        }
    }
}
