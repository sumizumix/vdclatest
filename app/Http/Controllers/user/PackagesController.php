<?php


namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;
use App\Models\Product;
use App\Models\Test;
class PackagesController extends Controller
{
    public function index()
    {
        $packages =Product::all();
        
        return view('user.auth.doctors.packages', compact('packages'));
    }
    public function knowmore($id)
    {
        $packages =Product::findOrFail($id);
        
        return view('user.auth.patients.packageknowmore', compact('packages'));
    }
    public function testknowmore($id)
    {
        $packages =Test::findOrFail($id);
        
        return view('user.auth.patients.testknowmore', compact('packages'));
}

    // public function ProductListAjax()
    // {
      
    //     $products = Product::select('name')->get();
    //     $data=[];
    //     foreach($products  as $item){
    //         $data[]=$item['name'];

    //     }
    //     return $data;

    // }
//     public function ProductListAjax(Request $request)
// {
//     $query = $request->input("productname");
//     //dd($query);
//     if ($query) {
//         $products = Product::where('name', 'LIKE', "%{$query}%")->get();
//     }
//     else{
//         $products = Product::select('name')->get();

//     }
 
//     $data = [];

//     foreach ($products as $item) {
//         //dd($item);
//         $data[] = $item['name'];
//     }

//     // return response()->json($data);
//     return view('user.auth.doctors.packages', compact('products'));
// }


// public function search(Request $request)
// {
//     $query = $request->input('query');
    
//     // Fetch products from the database
//     $products = Product::where('name', 'LIKE', "%{$query}%")
//                         ->get();
    
//     // Return the response as JSON
//     return response()->json($products);
// }

}
