<?php

namespace App\ToUploader;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

abstract class ToUploader
{
    public static function create(UploadedFile $uploadedFile, string $folder): string
    {
        return Storage::disk('public')->put($folder, $uploadedFile);
    }

    public static function overwrite(
        ?UploadedFile $uploadedFile,
        string | null $beforeImage,
        string $destination
    ): ?string {
        if (null === $uploadedFile && null === $beforeImage)
            return null;

        elseif (null === $uploadedFile && null !== $beforeImage)  return $beforeImage;

        elseif (null !== $uploadedFile && null === $beforeImage)
            return self::create($uploadedFile, $destination);

        self::delete($beforeImage);

        return self::create($uploadedFile, $destination);
    }

    public static function delete(string $filename): void
    {
        if (Storage::disk('public')->exists($filename)) {
            Storage::disk('public')->delete($filename);
        }
    }
}
