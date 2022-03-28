<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMahsiswassayaRequest;
use App\Http\Requests\UpdateMahsiswassayaRequest;
use App\Repositories\MahsiswassayaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MahsiswassayaController extends AppBaseController
{
    /** @var MahsiswassayaRepository $mahsiswassayaRepository*/
    private $mahsiswassayaRepository;

    public function __construct(MahsiswassayaRepository $mahsiswassayaRepo)
    {
        $this->mahsiswassayaRepository = $mahsiswassayaRepo;
    }

    /**
     * Display a listing of the Mahsiswassaya.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $mahsiswassayas = $this->mahsiswassayaRepository->all();

        return view('mahsiswassayas.index')
            ->with('mahsiswassayas', $mahsiswassayas);
    }

    /**
     * Show the form for creating a new Mahsiswassaya.
     *
     * @return Response
     */
    public function create()
    {
        return view('mahsiswassayas.create');
    }

    /**
     * Store a newly created Mahsiswassaya in storage.
     *
     * @param CreateMahsiswassayaRequest $request
     *
     * @return Response
     */
    public function store(CreateMahsiswassayaRequest $request)
    {
        $input = $request->all();

        $mahsiswassaya = $this->mahsiswassayaRepository->create($input);

        Flash::success('Mahsiswassaya saved successfully.');

        return redirect(route('mahsiswassayas.index'));
    }

    /**
     * Display the specified Mahsiswassaya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mahsiswassaya = $this->mahsiswassayaRepository->find($id);

        if (empty($mahsiswassaya)) {
            Flash::error('Mahsiswassaya not found');

            return redirect(route('mahsiswassayas.index'));
        }

        return view('mahsiswassayas.show')->with('mahsiswassaya', $mahsiswassaya);
    }

    /**
     * Show the form for editing the specified Mahsiswassaya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mahsiswassaya = $this->mahsiswassayaRepository->find($id);

        if (empty($mahsiswassaya)) {
            Flash::error('Mahsiswassaya not found');

            return redirect(route('mahsiswassayas.index'));
        }

        return view('mahsiswassayas.edit')->with('mahsiswassaya', $mahsiswassaya);
    }

    /**
     * Update the specified Mahsiswassaya in storage.
     *
     * @param int $id
     * @param UpdateMahsiswassayaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMahsiswassayaRequest $request)
    {
        $mahsiswassaya = $this->mahsiswassayaRepository->find($id);

        if (empty($mahsiswassaya)) {
            Flash::error('Mahsiswassaya not found');

            return redirect(route('mahsiswassayas.index'));
        }

        $mahsiswassaya = $this->mahsiswassayaRepository->update($request->all(), $id);

        Flash::success('Mahsiswassaya updated successfully.');

        return redirect(route('mahsiswassayas.index'));
    }

    /**
     * Remove the specified Mahsiswassaya from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mahsiswassaya = $this->mahsiswassayaRepository->find($id);

        if (empty($mahsiswassaya)) {
            Flash::error('Mahsiswassaya not found');

            return redirect(route('mahsiswassayas.index'));
        }

        $this->mahsiswassayaRepository->delete($id);

        Flash::success('Mahsiswassaya deleted successfully.');

        return redirect(route('mahsiswassayas.index'));
    }
}
