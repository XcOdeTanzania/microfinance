<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{

    //get Product
    public function getProducts()
    {
        $products = Product::all();

        return response()->json(['products' => $products], 200, [], JSON_NUMERIC_CHECK);
    }

    //get all Product
    public function getProduct($productId)
    {

        $product = Product::find($productId);
        if (!$product) return response()->json(['error' => 'Product not found']);

        return response()->json(['product' => $product], 200, [], JSON_NUMERIC_CHECK);
    }

    //Post Product
    public function postProduct(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'interest_rate' => 'required',
                'loan_application_fee_rate' => 'required',
                'loan_agreement_contract_fee_rate' => 'required',
                'penalty_for_late_payment_rate' => 'required',
                'loan_guarantee_fund_rate' => 'required',
                'insurance_fund_rate' => 'required',
                'minimum_amount' => 'required',
                'maximum_amount' => 'required',
                'increment_per_cycle' => 'required',
            ]
        );

        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $product = new Product();

        $product->name = $request->name;
        $product->interest_rate  = $request->interest_rate;
        $product->loan_application_fee_rate  = $request->loan_application_fee_rate;
        $product->loan_agreement_contract_fee_rate  = $request->loan_agreement_contract_fee_rate;
        $product->penalty_for_late_payment_rate  = $request->penalty_for_late_payment_rate;
        $product->loan_guarantee_fund_rate  = $request->loan_guarantee_fund_rate;
        $product->insurance_fund_rate  = $request->insurance_fund_rate;
        $product->minimum_amount  = $request->minimum_amount;
        $product->maximum_amount  = $request->maximum_amount;
        $product->increment_per_cycle  = $request->increment_per_cycle;

        $product->save();

        return response()->json(['product' => $product]);
    }



    // put Product
    public function putProduct(Request $request, $businessId)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'interest_rate' => 'required',
                'loan_application_fee_rate' => 'required',
                'loan_agreement_contract_fee_rate' => 'required',
                'penalty_for_late_payment_rate' => 'required',
                'loan_guarantee_fund_rate' => 'required',
                'insurance_fund_rate' => 'required',
                'minimum_amount' => 'required',
                'maximum_amount' => 'required',
                'increment_per_cycle' => 'required',
            ]
        );
        if ($validator->fails())
            return response()->json(['error', $validator->errors()]);

        $product = Product::find($businessId);
        if (!$product) return response()->json(['error' => 'Product not found']);

        $product->update([
            'name' => $request->name,
            'interest_rate'  => $request->interest_rate,
            'loan_application_fee_rate'  => $request->loan_application_fee_rate,
            'loan_agreement_contract_fee_rate'  => $request->loan_agreement_contract_fee_rate,
            'penalty_for_late_payment_rate'  => $request->penalty_for_late_payment_rate,
            'loan_guarantee_fund_rate'  => $request->loan_guarantee_fund_rate,
            'insurance_fund_rate'  => $request->insurance_fund_rate,
            'minimum_amount'  => $request->minimum_amount,
            'maximum_amount'  => $request->maximum_amount,
            'increment_per_cycle'  => $request->increment_per_cycle
        ]);

        return response()->json(['product' => $product], 200, [], JSON_NUMERIC_CHECK);
    }

    //delete Product
    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        if (!$product) return response()->json(['error' => 'Product not found']);

        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
