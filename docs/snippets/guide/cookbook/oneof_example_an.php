<?php

class Controller
{
    /**
     * @OA\Response(
     *     response=200,
     *     @OA\JsonContent(
     *         oneOf={
     *             @OA\Schema(ref="#/components/schemas/QualificationHolder"),
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/QualificationHolder")
     *             )
     *         }
     *     )
     * )
     */
    public function index()
    {
        // ...
    }
}
