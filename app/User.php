<?php

namespace Tweeter;

use Laravel\Scout\Searchable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Searchable;

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
        'avatar',
        'profileUrl',
    ];

    public function posts()
    {
        return $this->hasMany('Tweeter\Post');
    }

    public function getAvatar()
    {
        return 'https://www.gravatar.com/avatar/' . md5($this->email) . '?s=45&d=identicon';
    }

    public function getAvatarAttribute()
    {
        return $this->getAvatar();
    }

    public function getProfileUrlAttribute()
    {
        return route('user.profile', $this);
    }

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function isNotMe(User $user)
    {
        return $this->id !== $user->id;
    }

    public function isFollowing(User $user)
    {
        return (bool) $this->following->where('id', $user->id)->count();
    }

    public function canFollow(User $user)
    {
        if (!$this->isNotMe($user)) {
            return false;
        }

        return !$this->isFollowing($user);
    }

    public function canUnfollow(User $user)
    {
        return $this->isFollowing($user);
    }

    public function following()
    {
        return $this->belongsToMany('Tweeter\User', 'follows', 'user_id', 'follower_id');
    }

    public function followers()
    {
        return $this->belongsToMany('Tweeter\User', 'follows', 'follower_id', 'user_id');
    }
}
