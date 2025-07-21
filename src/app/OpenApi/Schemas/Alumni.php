<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="Alumni",
 *     type="object",
 *     title="Alumni",
 *     required={"id", "nama", "tahun_lulus", "jurusan"},
 *     
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="nama", type="string", example="Budi Santoso"),
 *     @OA\Property(property="tahun_lulus", type="integer", example=2020),
 *     @OA\Property(property="jurusan", type="string", example="Teknik Informatika"),
 *     @OA\Property(property="pekerjaan", type="string", nullable=true, example="Software Engineer"),
 *     @OA\Property(property="kontak", type="string", nullable=true, example="+628123456789"),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-07-21T12:00:00Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-07-21T12:00:00Z")
 * )
 */
class Alumni {}
