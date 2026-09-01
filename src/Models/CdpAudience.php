<?php

declare(strict_types=1);

namespace Liberu\CRM\CustomerDataPlatform\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 * @property string $status
 * @property array<int, mixed>|null $activations
 */
final class CdpAudience extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_cdp_audiences';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['definition' => 'array', 'activations' => 'array'];
    }
}
