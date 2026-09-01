<?php

declare(strict_types=1);

namespace Liberu\CRM\CustomerDataPlatform\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $profile_id @property bool $consented */
final class CdpEvent extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_cdp_events';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['payload' => 'array', 'consented' => 'boolean', 'occurred_at' => 'datetime'];
    }
}
