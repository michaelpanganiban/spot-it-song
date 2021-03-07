<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Song
 * 
 * @property int $song_id
 * @property string $title
 * @property string $lyrics
 * @property string $author
 * @property int $created_by
 * @property Carbon $created_at
 * @property int|null $modified_by
 * @property Carbon|null $modified_at
 *
 * @package App\Models
 */
class Song extends Model
{
	protected $table = 'songs';
	protected $primaryKey = 'song_id';
	public $timestamps = false;

	protected $casts = [
		'created_by' => 'int',
		'modified_by' => 'int'
	];

	protected $dates = [
		'modified_at'
	];

	protected $fillable = [
		'title',
		'lyrics',
		'author',
		'created_by',
		'modified_by',
		'modified_at'
	];
}
