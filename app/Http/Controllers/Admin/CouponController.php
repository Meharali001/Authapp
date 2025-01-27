<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\StoreTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use App\Models\Coupon;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{
    private $coupon;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Coupon $coupon)
    {
        $this->middleware('auth:admin');
        $this->coupon = $coupon;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $data = Coupon::get();
            return view('admin.coupons.index', compact('data'));
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Testimonial();
        $form = [
            'type' => 'create',
            'heading' => 'Add Coupon',
            'method' => 'POST',
            'action' => route('admin.coupon.store'),
            'cancel_url' => route('admin.coupon.index')
        ];
        return view('admin.coupons.form', compact('form', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $data = $request->except(
                [
                    '_method',
                    '_token',
                    'previous_image',
                    'image'
                ]
            );
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $data['image'] = $this->uploadFile($file, 'testimonial');
            }
            Coupon::create($data);
            DB::commit();
            return redirect()
                ->route('admin.coupon.index')
                ->with('success', 'Coupon has been added successfully.');
        }catch (\Exception $exception) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Coupon::find($id);
        return view('admin.coupons.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Coupon::find($id);

        $form = [
            'type' => 'create',
            'heading' => 'Edit Coupon',
            'method' => 'PUT',
            'action' => route('admin.coupon.update', $id),
            'cancel_url' => route('admin.coupon.index')
        ];

        return view('admin.coupons.form', compact('data', 'form'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaFile  $mediaFile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $testimonial = Coupon::find($id)->delete();
            return redirect()
                ->route('admin.coupon.index')
                ->with('success', 'Coupon has been deleted successfully.');
        }catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->except(
                [
                    '_method',
                    '_token',
                    'previous_image',
                    'image'
                ]
            );

            $previousimage = $request->previous_image;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $data['image'] = $this->updateFile($file, $previousimage, 'name');
            } else {
                $data['image'] = $previousimage;
            }

            Coupon::where(['id' => $request->id])->update($data);
            DB::commit();
            return redirect()
                ->route('admin.coupon.index')
                ->with('success', 'Coupon has been updated successfully.');
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()
                ->back()
                ->with('error', $exception->getMessage());
        }
    }
}

