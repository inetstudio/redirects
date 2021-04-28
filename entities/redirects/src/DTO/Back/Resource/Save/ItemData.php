<?php

declare(strict_types=1);

namespace InetStudio\RedirectsPackage\Redirects\DTO\Back\Resource\Save;

use Illuminate\Http\Request;
use Spatie\DataTransferObject\DataTransferObject;
use InetStudio\RedirectsPackage\Redirects\Contracts\DTO\Back\Resource\Save\ItemDataContract;

class ItemData extends DataTransferObject implements ItemDataContract
{
    public ?string $id;

    public string $uri;

    public string $destination;

    public int $status;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'id' => $request->input('id'),
            'uri' => self::preparePath($request->input('uri')),
            'destination' => self::preparePath($request->input('destination')),
            'status' => (int) $request->input('status', 302),
        ]);
    }

    public static function preparePath(string $path): string
    {
        $path = trim($path, '/');
        $appUri = trim(url('/'), '/');

        $appHost = parse_url($appUri, PHP_URL_HOST);
        $parsedPath = parse_url($path);

        if (($parsedPath['host'] ?? '') === $appHost) {
            $path = trim($parsedPath['path'], '/');
        }

        if (! isset($parsedPath['host']) || $parsedPath['host'] === $appHost) {
            $path = '/'.trim($path, '/');
        }

        return $path;
    }
}
