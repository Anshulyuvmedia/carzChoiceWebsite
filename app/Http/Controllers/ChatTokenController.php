<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use GetStream\StreamChat\Client;

class ChatTokenController extends Controller
{
    public function generate(Request $request)
    {
        // Log::info('Chat token request:', $request->all());
        $userId = $request->input('userId');
        $userName = $request->input('userName');
    
        $apiKey = "3nbgqeewske9";
        $apiSecret = "9565xpusakabfzfxjgrvcv22xn6mup5vvspqsq4xyefn6r3cbvcyp9t7feng5bks";
    
        if (!$userId || !$userName) {
            return response()->json(['error' => 'Missing user data'], 400);
        }
    
        try {
            $client = new \GetStream\StreamChat\Client($apiKey, $apiSecret);
            $token = $client->createToken((string) $userId);
    
            return response()->json([
                'token' => $token,
                'user' => [
                    'id' => (string) $userId,
                    'name' => $userName,
                ],
            ]);
        } catch (\Exception $e) {
            \Log::error('Failed to generate chat token', ['error' => $e->getMessage()]);
            return response()->json([
                'error' => 'Failed to generate chat token',
                'message' => $e->getMessage()
            ], 500);
        }
    }

}
