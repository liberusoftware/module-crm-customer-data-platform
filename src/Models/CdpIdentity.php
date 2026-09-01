<?php

declare(strict_types=1);

namespace Liberu\CRM\CustomerDataPlatform\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property int $profile_id */
final class CdpIdentity extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_cdp_identities';

    protected $guarded = [];
}
