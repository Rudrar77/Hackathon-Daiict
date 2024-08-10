<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Illuminate\Support\Facades\Log;

class EquipmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'equipmentName' => 'required|string|max:255',
            'description' => 'required|string',
            'equipment-photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rentalPrice' => 'required|numeric',
            'availability' => 'required|string',
            'contactInfo' => 'required|string|max:255',
        ]);

        // Handle the file upload
        if ($request->hasFile('equipment-photo')) {
            try {
                $photoPath = $request->file('equipment-photo')->store('equipment-photos', 'public');
            } catch (\Exception $e) {
                // Log the error and return an error message
                Log::error('File upload failed: ' . $e->getMessage());
                return redirect()->back()->withErrors('File upload failed. Please try again.');
            }
        } else {
            return redirect()->back()->withErrors('No file was uploaded.');
        }

        // Store the equipment data
        $equipment = Equipment::create([
            'name' => $request->equipmentName,
            'description' => $request->description,
            'photo_path' => $photoPath,
            'rental_price' => $request->rentalPrice,
            'availability' => $request->availability,
            'contact_info' => $request->contactInfo,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Equipment added successfully!');
    }
}
