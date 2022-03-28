<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNilaiRequest;
use App\Http\Requests\UpdateNilaiRequest;
use App\Repositories\NilaiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class NilaiController extends AppBaseController
{
    /** @var NilaiRepository $nilaiRepository*/
    private $nilaiRepository;

    public function __construct(NilaiRepository $nilaiRepo)
    {
        $this->nilaiRepository = $nilaiRepo;
    }

    /**
     * Display a listing of the Nilai.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $nilais = $this->nilaiRepository->all();

        return view('nilais.index')
            ->with('nilais', $nilais);
    }

    /**
     * Show the form for creating a new Nilai.
     *
     * @return Response
     */
    public function create()
    {
        return view('nilais.create');
    }

    /**
     * Store a newly created Nilai in storage.
     *
     * @param CreateNilaiRequest $request
     *
     * @return Response
     */
    public function store(CreateNilaiRequest $request)
    {
        $input = $request->all();

        $nilai = $this->nilaiRepository->create($input);

        Flash::success('Nilai saved successfully.');

        return redirect(route('nilais.index'));
    }

    /**
     * Display the specified Nilai.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nilai = $this->nilaiRepository->find($id);

        if (empty($nilai)) {
            Flash::error('Nilai not found');

            return redirect(route('nilais.index'));
        }

        return view('nilais.show')->with('nilai', $nilai);
    }

    /**
     * Show the form for editing the specified Nilai.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nilai = $this->nilaiRepository->find($id);

        if (empty($nilai)) {
            Flash::error('Nilai not found');

            return redirect(route('nilais.index'));
        }

        return view('nilais.edit')->with('nilai', $nilai);
    }

    /**
     * Update the specified Nilai in storage.
     *
     * @param int $id
     * @param UpdateNilaiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNilaiRequest $request)
    {
        $nilai = $this->nilaiRepository->find($id);

        if (empty($nilai)) {
            Flash::error('Nilai not found');

            return redirect(route('nilais.index'));
        }

        $nilai = $this->nilaiRepository->update($request->all(), $id);

        Flash::success('Nilai updated successfully.');

        return redirect(route('nilais.index'));
    }

    /**
     * Remove the specified Nilai from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nilai = $this->nilaiRepository->find($id);

        if (empty($nilai)) {
            Flash::error('Nilai not found');

            return redirect(route('nilais.index'));
        }

        $this->nilaiRepository->delete($id);

        Flash::success('Nilai deleted successfully.');

        return redirect(route('nilais.index'));
    }
}
