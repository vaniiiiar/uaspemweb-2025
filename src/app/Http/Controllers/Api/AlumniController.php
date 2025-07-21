<?php

namespace App\Http\Controllers\Api;

use App\Models\Alumni;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;
use App\Helper\EncryptionHelper;
use App\Http\Controllers\Controller;

class AlumniController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/alumni",
     *     operationId="getAlumni",
     *     tags={"Alumni"},
     *     summary="Get all alumni",
     *     description="Returns a list of all alumni.",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/Alumni")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=401, description="Unauthorized - Invalid API Key")
     * )
     */
    public function index()
    {
        $data = Alumni::all();

        $responseData = [
            'message' => 'success',
            'data' => $data,
        ];

        $encryptResponse = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json([
            'data' => $encryptResponse,
        ]);
    }

    /**
     * @OA\Post(
     *     path="/api/alumni",
     *     operationId="storeAlumni",
     *     tags={"Alumni"},
     *     summary="Create a new alumni record",
     *     description="Stores a new alumni data and returns the encrypted response.",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nama", "tahun_lulus", "jurusan"},
     *             @OA\Property(property="nama", type="string", example="Budi Santoso"),
     *             @OA\Property(property="tahun_lulus", type="integer", example=2020),
     *             @OA\Property(property="jurusan", type="string", example="Teknik Informatika"),
     *             @OA\Property(property="pekerjaan", type="string", example="Software Engineer"),
     *             @OA\Property(property="kontak", type="string", example="+628123456789")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alumni created",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="eyJpdiI6In...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Error storing alumni data",
     *         @OA\JsonContent(
     *             @OA\Property(property="error", type="string", example="Error storing alumni: ...")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tahun_lulus' => 'required|integer',
            'jurusan' => 'required|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
        ]);

        try {
            $alumni = Alumni::create($validated);

            $responseData = [
                'message' => 'Alumni created successfully',
                'data' => $alumni,
            ];

            $encryptedResponse = EncryptionHelper::encrypt(json_encode($responseData));

            return response()->json(['data' => $encryptedResponse]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error storing alumni: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/alumni/{id}",
     *     operationId="getAlumniById",
     *     tags={"Alumni"},
     *     summary="Get alumni by ID",
     *     description="Returns a single alumni data",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Alumni ID",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="eyJpdiI6In...")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Alumni not found"),
     *     @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function show($id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Alumni not found'], 404);
        }

        $responseData = [
            'message' => 'success',
            'data' => $alumni,
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }

    /**
     * @OA\Put(
     *     path="/api/alumni/{id}",
     *     operationId="updateAlumni",
     *     tags={"Alumni"},
     *     summary="Update alumni data",
     *     description="Updates an existing alumni record",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Alumni ID",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="nama", type="string", example="Updated Name"),
     *             @OA\Property(property="tahun_lulus", type="integer", example=2021),
     *             @OA\Property(property="jurusan", type="string", example="Sistem Informasi"),
     *             @OA\Property(property="pekerjaan", type="string", example="Manager IT"),
     *             @OA\Property(property="kontak", type="string", example="+628987654321")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alumni updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="eyJpdiI6In...")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Alumni not found"),
     *     @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Alumni not found'], 404);
        }

        $validated = $request->validate([
            'nama' => 'sometimes|string|max:255',
            'tahun_lulus' => 'sometimes|integer',
            'jurusan' => 'sometimes|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'kontak' => 'nullable|string|max:255',
        ]);

        $alumni->update($validated);

        $responseData = [
            'message' => 'Alumni updated successfully',
            'data' => $alumni,
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }

    /**
     * @OA\Delete(
     *     path="/api/alumni/{id}",
     *     operationId="deleteAlumni",
     *     tags={"Alumni"},
     *     summary="Delete alumni",
     *     description="Deletes an alumni by ID",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Alumni ID",
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Alumni deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="eyJpdiI6In...")
     *         )
     *     ),
     *     @OA\Response(response=404, description="Alumni not found"),
     *     @OA\Response(response=401, description="Unauthorized")
     * )
     */
    public function destroy($id)
    {
        $alumni = Alumni::find($id);

        if (!$alumni) {
            return response()->json(['message' => 'Alumni not found'], 404);
        }

        $alumni->delete();

        $responseData = [
            'message' => 'Alumni deleted successfully',
            'data' => ['id' => $id],
        ];

        $encrypted = EncryptionHelper::encrypt(json_encode($responseData));

        return response()->json(['data' => $encrypted]);
    }

    /**
     * @OA\Post(
     *     path="/api/alumni/decrypt",
     *     operationId="decryptAlumniResponse",
     *     tags={"Alumni"},
     *     summary="Decrypt encrypted alumni data",
     *     description="Decrypts the encrypted alumni response.",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"data"},
     *             @OA\Property(property="data", type="string", example="eyJpdiI6IjFPU2h...")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Decrypted response",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="success"),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(response=400, description="Decryption failed")
     * )
     */
    public function decryptResponse(Request $request)
    {
        $encryptData = $request->input('data');

        try {
            $decryptedJson = EncryptionHelper::decrypt($encryptData);
            $decoded = json_decode($decryptedJson, true);

            return response()->json($decoded);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Decrypt Failed',
                'error' => $e->getMessage(),
            ], 400);
        }
    }
}
