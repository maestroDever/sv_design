<?php

declare (strict_types = 1);

use App\Exceptions\JsonException;
use Carbon\Carbon;
use Facades\App\Managers\Localizer;
use Facades\Provider\Managers\ProviderManager;
use Facades\Store\Managers\StoreManager;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Provider\Models\Provider;
use Store\Models\Store;
use Store\Models\Users\StoreEmployee;
use Symfony\Component\HttpFoundation\Response;

if (!function_exists('is_logged_in')) {
    /**
     * @return bool
     */
    function is_logged_in(): bool
    {
        return auth()->check();
    }
}

if (!function_exists('is_guest')) {
    /**
     * @return bool
     */
    function is_guest(): bool
    {
        return auth()->guest();
    }
}

if (!function_exists('current_user')) {
    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|\User\Models\User|null
     */
    function current_user(): ?Authenticatable
    {
        return auth()->user();
    }
}

if (!function_exists('me')) {
    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|\User\Models\User|null
     */
    function me(): ?Authenticatable
    {
        return auth()->user();
    }
}

if (!function_exists('current_store')) {
    /**
     * @return \Store\Models\Store|null
     */
    function current_store(): ?Store
    {
        return StoreManager::getCurrentStore();
    }
}

if (!function_exists('current_store_employee')) {
    /**
     * @return \Store\Models\Users\StoreEmployee|null
     */
    function current_store_employee(): ?StoreEmployee
    {
        if (!is_logged_in() || !me()->current_store_employee) {
            return null;
        }

        return me()->current_store_employee;
    }
}

if (!function_exists('current_provider')) {
    /**
     * @return \Provider\Models\Provider|null
     */
    function current_provider(): ?Provider
    {
        return ProviderManager::getCurrentProvider();
    }
}

if (!function_exists('unique_integer_id')) {
    /**
     * Create a unique integer identifier based on the current time.
     *
     * @return int
     */
    function unique_integer_id(): int
    {
        return hexdec(uniqid('', false));
    }
}

if (!function_exists('random_float')) {
    /**
     * Generate a random decimal number.
     *
     * @param int $min
     * @param int $max
     *
     * @return float
     */
    function random_float(int $min, int $max): float
    {
        return random_int($min * 100, $max * 100) / 100;
    }
}

if (!function_exists('str_random_int')) {
    /**
     * @param int $length
     *
     * @return string
     */
    function str_random_int($length = 16)
    {
        $string = '';

        while (strlen($string) < $length) {
            $string .= random_int(0, 9);
        }

        return $string;
    }
}

if (!function_exists('prioritized_localized_countries')) {
    /**
     * @return \Illuminate\Support\Collection
     */
    function prioritized_localized_countries(): Collection
    {
        $countries = collect(Countries::getList());

        return $countries
            ->prepend($countries->get('BE'), 'BE')
            ->prepend($countries->get('NL'), 'NL');
    }
}

if (!function_exists('localized_countries')) {
    /**
     * @return \Illuminate\Support\Collection
     */
    function localized_countries(): Collection
    {
        return collect(Countries::getList(locale()));
    }
}

if (!function_exists('supported_locales')) {
    /**
     * @return array
     */
    function supported_locales(): array
    {
        return config('app.supported_locales');
    }
}

if (!function_exists('fallback_locale')) {
    /**
     * Get the fallback locale.
     *
     * @return string
     */
    function fallback_locale()
    {
        return config('app.fallback_locale');
    }
}

if (!function_exists('simplify_locale')) {
    /**
     * Simplify the given locale.
     *
     * @param string $locale
     *
     * @return string
     */
    function simplify_locale(string $locale): string
    {
        return mb_strtolower(str_before($locale, '_'));
    }
}

if (!function_exists('current_url')) {
    /**
     * @return string
     */
    function current_url(): string
    {
        return request()->url();
    }
}

if (!function_exists('store_route')) {
    /**
     * Generate the URL to a named store route.
     *
     * @param string $name
     * @param \Store\Models\Store|string $store
     * @param mixed $parameters
     * @param bool $absolute
     *
     * @return string
     */
    function store_route($name, $store, $parameters = [], $absolute = true)
    {
        $parameters = array_wrap($parameters);

        if ($store instanceof Store) {
            $store = $store->slug;
        }

        array_set($parameters, 'storeSlug', $store ?? '');

        return app('url')->route($name, $parameters, $absolute);
    }
}

if (!function_exists('active_route_class')) {
    /**
     * Returns the given class if the current route matches one of the given patterns.
     *
     * @param string $patterns
     * @param string $class
     *
     * @return string
     */
    function active_route_class(string $patterns, string $class = 'active'): string
    {
        if (Route::is($patterns)) {
            return $class;
        }

        return '';
    }
}

if (!function_exists('provider_route')) {
    /**
     * Generate the URL to a named provider route.
     *
     * @param string $name
     * @param \Provider\Models\Provider|string $provider
     * @param array|mixed $parameters
     * @param bool $absolute
     *
     * @return string
     */
    function provider_route($name, $provider, $parameters = [], $absolute = true)
    {
        $parameters = array_wrap($parameters);

        if ($provider instanceof Provider) {
            $provider = $provider->slug;
        }

        array_set($parameters, 'providerSlug', $provider ?? '');

        return app('url')->route($name, $parameters, $absolute);
    }
}

if (!function_exists('redirect_to')) {
    /**
     * Immediately redirect to a given URL.
     *
     * @param string $url
     * @param int $code
     *
     * @return void
     */
    function redirect_to(string $url = '/', int $code = Response::HTTP_FOUND): void
    {
        abort($code, '', ['Location' => $url]);
    }
}

if (!function_exists('without_observers')) {
    /**
     * @param array|string $models A single model or an array of models, either as class instance or class name.
     * @param callable $callback The method to be executed without model observers.
     *
     * @return mixed
     */
    function without_observers($models, callable $callback)
    {
        $models = collect(array_wrap($models));

        $models->each(function ($model) {
            (is_string($model) ? app($model) : $model)::flushEventListeners();
        });

        $result = $callback();

        $models->each(function ($model) {
            (is_string($model) ? app($model) : $model)->boot();
        });

        return $result;
    }
}

if (!function_exists('encode_fake_id')) {
    /**
     * @param \Illuminate\Support\Collection|array|string|int $realId
     *
     * @return string|int
     */
    function encode_fake_id($realId)
    {
        if (is_iterable($realId)) {
            return encode_fake_ids($realId);
        }

        return app('fakeid')->encode($realId);
    }
}

if (!function_exists('encode_fake_ids')) {
    /**
     * @param \Illuminate\Support\Collection|array $collection
     *
     * @return mixed
     */
    function encode_fake_ids($collection)
    {
        $result = collect($collection)->encodeFakeIds();

        if ($collection instanceof Collection) {
            return $result;
        }

        return $result->toArray();
    }
}

if (!function_exists('decode_fake_id')) {
    /**
     * @param \Illuminate\Support\Collection|array|string|int $fakeId
     *
     * @return \Illuminate\Support\Collection|array|string|int
     */
    function decode_fake_id($fakeId)
    {
        if (is_iterable($fakeId)) {
            return decode_fake_ids($fakeId);
        }

        return app('fakeid')->decode($fakeId);
    }
}

if (!function_exists('decode_fake_ids')) {
    /**
     * @param \Illuminate\Support\Collection|array $collection
     *
     * @return mixed
     */
    function decode_fake_ids($collection)
    {
        $result = collect($collection)->decodeFakeIds();

        if ($collection instanceof Collection) {
            return $result;
        }

        return $result->toArray();
    }
}

if (!function_exists('format_price')) {
    /**
     * @param int $price
     *
     * @return string
     */
    function format_price(int $price): string
    {
        return number_format(
            $price / 100,
            2,
            '.',
            ''
        );
    }
}

if (!function_exists('readable_price')) {
    /**
     * @param int $price
     *
     * @return string
     */
    function readable_price(int $price): string
    {
        // Make sure we show integer currencies as real-world decimals
        $price = $price / 100;
        $price = number_format($price, 2, ',', ' ');

        // Simplify even prices
        return str_replace(',00', '', $price);
    }
}

if (!function_exists('get_model_id')) {
    /**
     * @param \Illuminate\Database\Eloquent\Model|string|int $value
     *
     * @return int
     *
     * @throws \RuntimeException
     */
    function get_model_id($value): int
    {
        if ($value instanceof Model) {
            return $value->getKey();
        }

        if (is_string($value)) {
            return (int)$value;
        }

        if (!is_integer($value)) {
            throw new RuntimeException('Cannot retrieve model ID from given value.');
        }

        return $value;
    }
}

if (!function_exists('execute')) {
    /**
     * Send the given command to the dispatcher for execution.
     *
     * @param object $command
     *
     * @return void
     */
    function execute($command): void
    {
        app(Dispatcher::class)->dispatch($command);
    }
}

if (!function_exists('class_uses_recursive_class')) {
    /**
     * @param object $class
     * @param object|string $uses
     *
     * @return bool
     */
    function class_uses_recursive_class($class, $uses): bool
    {
        $classes = class_uses_recursive($class);

        if (!$classes) {
            return false;
        }

        $uses = is_object($uses) ? get_class($uses) : $uses;

        if (!in_array($uses, array_values($classes), true)) {
            return false;
        }

        return true;
    }
}

if (!function_exists('get_commit_hash')) {
    /**
     * Checks to see if we have a .commit_hash file or .git repo and return the hash if we do.
     *
     * @return string|null
     */
    function get_commit_hash(): ?string
    {
        $commitHash = base_path('.commit_hash');

        if (file_exists($commitHash)) {
            return trim(exec(sprintf('cat %s', $commitHash)));
        }

        if (is_dir(base_path('.git'))) {
            return trim(exec('git log --pretty="%h" -n1 HEAD'));
        }

        return null;
    }
}

if (!function_exists('retry_or_abort')) {
    /**
     * Retry an operation at least a given number of times, but only when the if-callable determines it's still worth a shot.
     *
     * @param int $times
     * @param callable $callback
     * @param callable $shouldAbort
     * @param int $sleep
     *
     * @return mixed
     *
     * @throws \Exception
     */
    function retry_or_abort($times, callable $callback, callable $shouldAbort, $sleep = 0)
    {
        $times--;

        beginning: try {
            return $callback();
        } catch (Throwable $exception) {
            // Only retry when we're out of time or it's not viable anymore
            if (!$times || $shouldAbort($exception, $times)) {
                throw $exception;
            }

            $times--;

            if ($sleep) {
                usleep($sleep * 1000);
            }

            goto beginning;
        }
    }
}

if (!function_exists('retry_if')) {
    /**
     * Retry something a number of times if the conditional returns true.
     *
     * @param int $times
     * @param callable $callback
     * @param callable $shouldRetry
     * @param int $sleep
     *
     * @return mixed
     *
     * @throws \Exception
     */
    function retry_if($times, callable $callback, callable $shouldRetry, $sleep = 0)
    {
        $times--;

        beginning: try {
            return $callback();
        } catch (Throwable $exception) {
            if (!$times || !$shouldRetry($exception, $times)) {
                throw $exception;
            }

            $times--;

            if ($sleep) {
                usleep($sleep * 1000);
            }

            goto beginning;
        }
    }
}

if (!function_exists('parse_to_array')) {
    /**
     * @param mixed $value
     *
     * @return array
     */
    function parse_to_array($value): array
    {
        return json_decode(
            is_string($value) ? $value : parse_to_json($value),
            true
        );
    }
}

if (!function_exists('parse_to_object')) {
    /**
     * @param mixed $value
     *
     * @return \stdClass
     */
    function parse_to_object($value): stdClass
    {
        return (object)json_decode(
            parse_to_json($value)
        );
    }
}

if (!function_exists('parse_to_json')) {
    /**
     * @param mixed $value
     *
     * @return string
     *
     * @throws \App\Exceptions\JsonException
     */
    function parse_to_json($value): string
    {
        $json = json_encode($value);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw JsonException::invalidJson(json_last_error_msg());
        }

        return $json;
    }
}

if (!function_exists('parse_from_json')) {
    /**
     * @param string $json
     *
     * @return array
     *
     * @throws \App\Exceptions\JsonException
     */
    function parse_from_json(string $json): array
    {
        $json = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw JsonException::invalidJson(json_last_error_msg());
        }

        return $json;
    }
}

if (!function_exists('get_morphed_model')) {
    /**
     * @param string $alias
     *
     * @return string
     */
    function get_morphed_model(string $alias): string
    {
        return Relation::getMorphedModel($alias);
    }
}

if (!function_exists('is_standard_date_format')) {
    /**
     * Determine if the given value is a standard date format.
     *
     * @param string $value
     *
     * @return bool
     */
    function is_standard_date_format($value): bool
    {
        return (bool)preg_match('/^(\d{4})-(\d{1,2})-(\d{1,2})$/', $value);
    }
}

if (!function_exists('to_date_time')) {
    /**
     * @param mixed $value
     *
     * @return \Carbon\Carbon
     */
    function to_date_time($value): Carbon
    {
        if ($value instanceof Carbon) {
            return $value->copy();
        }

        if ($value instanceof DateTimeInterface) {
            return new Carbon(
                $value->format('Y-m-d H:i:s.u'),
                $value->getTimezone()
            );
        }

        if (is_numeric($value)) {
            return Carbon::createFromTimestamp($value);
        }

        if (is_standard_date_format($value)) {
            return Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
        }

        return new Carbon($value);
    }
}

if (!function_exists('from_timezone')) {
    /**
     * Create a datetime object in a specific timezone. Ignores all existing timezone settings.
     *
     * @param mixed $dateTime
     * @param \DateTimeZone|string $timezone
     *
     * @return \Carbon\Carbon
     */
    function from_timezone($dateTime, $timezone): Carbon
    {
        if (is_string($timezone)) {
            $timezone = new DateTimeZone($timezone);
        }

        $dateTime = to_date_time($dateTime);

        return new Carbon(
            $dateTime->format('Y-m-d H:i:s'),
            $timezone
        );
    }
}

if (!function_exists('from_public_timezone')) {
    /**
     * Ignores all timezone settings and creates a datetime object in the public timezone.
     *
     * @param mixed $value
     *
     * @return \Carbon\Carbon
     */
    function from_public_timezone($value): Carbon
    {
        return from_timezone(
            $value,
            config('app.public_timezone')
        );
    }
}

if (!function_exists('to_timezone')) {
    /**
     * Set the internal application timezone on a datetime object.
     *
     * @param mixed $dateTime
     * @param \DateTimeZone|string $timezone
     *
     * @return \Carbon\Carbon
     */
    function to_timezone($dateTime, $timezone): Carbon
    {
        if (is_string($timezone)) {
            $timezone = new DateTimeZone($timezone);
        }

        $dateTime = to_date_time($dateTime);

        if ($dateTime->getTimezone()->getName() === $timezone->getName()) {
            return $dateTime;
        }

        return $dateTime->setTimezone($timezone);
    }
}

if (!function_exists('to_internal_timezone')) {
    /**
     * Set the internal application timezone on a datetime object.
     *
     * @param mixed $dateTime
     *
     * @return \Carbon\Carbon
     */
    function to_internal_timezone($dateTime): Carbon
    {
        return to_timezone(
            $dateTime,
            config('app.timezone')
        );
    }
}

if (!function_exists('to_public_timezone')) {
    /**
     * Set the public application timezone on a datetime object.
     *
     * @param mixed $dateTime
     *
     * @return \Carbon\Carbon
     */
    function to_public_timezone($dateTime): Carbon
    {
        return to_timezone(
            $dateTime,
            config('app.public_timezone')
        );
    }
}

if (!function_exists('array_pull_many')) {
    /**
     * Get values by their key and remove them from the array.
     *
     * @param array $array
     * @param array|string $keys
     *
     * @return array
     */
    function array_pull_many(array &$array, $keys): array
    {
        $keys = array_wrap($keys);

        return collect($keys)
            ->mapWithKeys(function ($key) use (&$array) {
                return [$key => array_pull($array, $key)];
            })
            ->toArray();
    }
}

if (!function_exists('first_paragraph')) {
    /**
     * Clean a WYSIWYG editor HTML string.
     *
     * @param string $text
     *
     * @return string
     */
    function first_paragraph(string $text): string
    {
        if (!str_contains($text, ['<p>', '</p>'])) {
            return str_limit(strip_tags(str_replace('</p><p>', ' ', $text)), 300);
        }

        $text = strstr($text, '<p>');
        $text = strstr($text, '</p>', true);

        return str_limit(strip_tags($text), 300);
    }
}

if (!function_exists('wysiwyg')) {
    /**
     * Clean a WYSIWYG editor HTML string.
     *
     * @param string $value
     * @param array $skip
     * @param array $config
     *
     * @return string
     */
    function wysiwyg(string $value, array $skip = [], array $config = []): string
    {
        $config = config('purifier-wysiwyg.settings.default') + $config;

        $config['HTML.Allowed'] = collect(explode(',', $config['HTML.Allowed']))
            ->diff($skip)
            ->implode(',');

        return clean($value, $config);
    }
}

if (!function_exists('wysiwyg_plain')) {
    /**
     * Clean a WYSIWYG editor HTML string.
     *
     * @param string $value
     * @param array $skip
     * @param array $config
     *
     * @return string
     */
    function wysiwyg_plain(string $value, array $skip = [], array $config = []): string
    {
        $skip = array_merge(['h2', 'h3', 'h4', 'ol', 'ul', 'li', 'blockquote'], $skip);

        return wysiwyg($value, $skip, $config);
    }
}

if (!function_exists('replace_filename')) {
    /**
     * @param string $path
     * @param string $newFilename
     *
     * @return string
     */
    function replace_filename(string $path, string $newFilename): string
    {
        $filename = pathinfo($path, PATHINFO_FILENAME);

        return str_replace_last(
            $filename,
            $newFilename,
            $path
        );
    }
}

if (!function_exists('suffix_filename')) {
    /**
     * Add a given string to the end of a filename, path, or URL, before the file extension (if present).
     *
     * @param string $filename
     * @param string $suffix
     *
     * @return string
     */
    function suffix_filename(string $filename, string $suffix): string
    {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        if (!$extension) {
            return $filename . $suffix;
        }

        return str_replace_last(
            '.' . $extension,
            $suffix . '.' . $extension,
            $filename
        );
    }
}

if (!function_exists('redirect_back_to')) {
    /**
     * Generate a hashed link to redirect back to using the redirect middleware.
     *
     * @param string $url
     * @param int $skipRequests
     *
     * @return string
     */
    function redirect_back_to(string $url, int $skipRequests = 1): string
    {
        return base64_encode(
            json_encode(
                compact(
                    'url',
                    'skipRequests'
                )
            )
        );
    }
}

if (!function_exists('get_host_from_url')) {
    /**
     * @param string|null $url
     *
     * @return string|null
     */
    function get_host_from_url(?string $url): ?string
    {
        if ($url === null) {
            return null;
        }

        $parts = parse_url($url);

        if ($parts === false || !isset($parts['host'])) {
            return null;
        }

        return trim($parts['host']) ?? null;
    }
}
