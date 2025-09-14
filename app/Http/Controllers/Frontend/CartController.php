<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApiPlan;
use App\Models\Bootcamp;
use App\Models\CoachingSlot;
use App\Models\Coupon;
use App\Models\CouponUsage;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\Exam;
use App\Models\Subscription;
use App\Models\SubscriptionList;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        set_page_meta('Cart');
        $data['platformCharge'] = number_format(Cart::priceTotal() * (config('settings.platform_charge') / 100), 2);

        $data['totalPrice'] = Cart::total() + $data['platformCharge'];

        return view('frontend.cart', $data);
    }

    public function addToCart(Request $request)
    {
        if (! Auth::check()) {
            $response = $this->responseArray('You need to login first!', 401);

            return response()->json($response);
        }

        $userType = auth()->user()->user_type;

        if ($userType === USER_TYPE_ADMIN) {
            $response = $this->responseArray('You are not eligible to cart this item!', 401);

            return response()->json($response);
        }

        // Api Plan
        if ($request->has('api_plan_id') && $request->has('api_plan_type')) {

            // Check plan exists or not
            $plan = ApiPlan::find($request->api_plan_id);
            if (! $plan) {
                $response = $this->responseArray('Api Plan not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkApiCartExist(CART_TYPE_API)->isNotEmpty()) {

                $response = $this->responseArray('A Plan already added to the cart!', 401);

                return response()->json($response);
            } else {
                // monthly
                if ($request->api_plan_type == API_MONTHLY) {
                    Cart::add(['id' => $plan->id, 'name' => $plan->title, 'qty' => 1, 'price' => $plan->price, 'weight' => 1, 'options' => ['type' => CART_TYPE_API, 'api_plan_type' => API_MONTHLY, 'image' => null, 'storage_type' => null]])->associate('App\Models\ApiPlan');
                }
                // yearly
                if ($request->api_plan_type == API_YEARLY) {
                    Cart::add(['id' => $plan->id, 'name' => $plan->title, 'qty' => 1, 'price' => $plan->price, 'weight' => 1, 'options' => ['type' => CART_TYPE_API, 'api_plan_type' => API_YEARLY, 'image' => null, 'storage_type' => null]])->associate('App\Models\ApiPlan');
                }

                $response = $this->responseArray('Item added to the cart!', 200, Cart::count());

                return response()->json($response);
            }
        }

        if ($userType != USER_TYPE_STUDENT && $userType != USER_TYPE_MEMBER) {
            $response = $this->responseArray('You are not eligible to cart this item!', 401);

            return response()->json($response);
        }

        // Course Item
        if ($request->has('course_id')) {

            // Check course exists or not
            $course = Course::find($request->course_id);
            if (! $course) {

                $response = $this->responseArray('Course not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkCartExist($course, CART_TYPE_COURSE)->isNotEmpty()) {

                $response = $this->responseArray('Item already added to the cart!', 401);

                return response()->json($response);
            } else {

                Cart::add(['id' => $course->id, 'name' => $course->title, 'qty' => 1, 'price' => $course->price, 'weight' => 1, 'options' => ['slug' => $course->slug, 'type' => CART_TYPE_COURSE, 'image' => $course->image, 'storage_type' => $course->storage_type, 'teacher_id' => $course->user_id]])->associate('App\Models\Course');
            }
        }

        // Exam Item
        if ($request->has('exam_id')) {

            // Check course exists or not
            $exam = Exam::find($request->exam_id);
            if (! $exam) {

                $response = $this->responseArray('Exam not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkCartExist($exam, CART_TYPE_EXAM)->isNotEmpty()) {

                $response = $this->responseArray('Item already added to the cart!', 401);

                return response()->json($response);
            } else {

                Cart::add(['id' => $exam->id, 'name' => $exam->title, 'qty' => 1, 'price' => $exam->price, 'weight' => 1, 'options' => ['slug' => $exam->slug, 'type' => CART_TYPE_EXAM, 'image' => $exam->image, 'storage_type' => $exam->storage_type]])->associate('App\Models\Exam');
            }
        }

        // Bootcamp Item
        if ($request->has('bootcamp_id')) {

            // Check course exists or not
            $bootcamp = Bootcamp::find($request->bootcamp_id);
            if (! $bootcamp) {
                $response = $this->responseArray('Bootcamp not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkCartExist($bootcamp, CART_TYPE_BOOTCAMP)->isNotEmpty()) {

                $response = $this->responseArray('Item already added to the cart!', 401);

                return response()->json($response);
            } else {

                Cart::add(['id' => $bootcamp->id, 'name' => $bootcamp->title, 'qty' => 1, 'price' => $bootcamp->price, 'weight' => 1, 'options' => ['slug' => $bootcamp->slug, 'type' => CART_TYPE_BOOTCAMP, 'image' => $bootcamp->image, 'storage_type' => $bootcamp->storage_type, 'teacher_id' => $bootcamp->user_id]])->associate('App\Models\Bootcamp');
            }
        }

        // Ebook Item
        if ($request->has('ebook_id')) {

            // Check Ebook exists or not
            $ebook = Ebook::find($request->ebook_id);
            if (! $ebook) {
                $response = $this->responseArray('Ebook not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkCartExist($ebook, CART_TYPE_EBOOK)->isNotEmpty()) {

                $response = $this->responseArray('Item already added to the cart!', 401);

                return response()->json($response);
            } else {

                Cart::add(['id' => $ebook->id, 'name' => $ebook->title, 'qty' => 1, 'price' => $ebook->price, 'weight' => 1, 'options' => ['slug' => $ebook->slug, 'type' => CART_TYPE_EBOOK, 'image' => $ebook->image, 'storage_type' => $ebook->storage_type]])->associate('App\Models\Ebook');
            }
        }

        // Coaching Item
        if ($request->has('coaching_slot_id')) {

            $slot = CoachingSlot::find($request->coaching_slot_id);
            if (! $slot) {
                $response = $this->responseArray('Coach schedule not found!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkCartCochingSlotExist($slot, $request->coaching_date)->isNotEmpty()) {

                $response = $this->responseArray('Coaching Schedule already added to the cart!', 401);

                return response()->json($response);
            } else {

                $hourly_rate = $slot->coach->hourly_rate;
                $minute_duration = $slot->minute_duration;
                $hour_duration = $slot->hour_duration;

                $minuteCost = 0;
                if ($minute_duration > 0) {
                    $minuteCost = ($hourly_rate / (60 / $minute_duration));
                }

                $price = number_format(($hour_duration * $hourly_rate) + $minuteCost, 2, '.', '');

                Cart::add(['id' => $slot->id, 'name' => $slot->user->full_name, 'qty' => 1, 'price' => $price, 'weight' => 1, 'options' => ['type' => CART_TYPE_COACHING, 'image' => $slot->user->avatar, 'storage_type' => $slot->user->storage_type, 'date' => $request->coaching_date, 'coach_id' => $slot->user_id]])->associate('App\Models\CoachingSlot');
            }
        }

        // Subscription Plan
        if ($request->has('subscription_id') && $request->has('subscription_type')) {

            // Check subscription exists or not
            $plan = Subscription::find($request->subscription_id);
            if (! $plan) {
                $response = $this->responseArray('Subscription not found!', 404);

                return response()->json($response);
            }

            //Check already subscription plan enable
            if (SubscriptionList::whereUserId(auth()->id())->active()->exists()) {
                $response = $this->responseArray('A Plan Already active, Please upgrade plan from dashboard!', 404);

                return response()->json($response);
            }

            // Check Cart Item already exists
            if ($this->checkSubscriptionCartExist(CART_TYPE_SUBSCRIPTION)->isNotEmpty()) {

                $response = $this->responseArray('A Plan already added to the cart!', 401);

                return response()->json($response);
            } else {
                // monthly
                if ($request->subscription_type == MONTHLY) {
                    Cart::add(['id' => $plan->id, 'name' => $plan->title, 'qty' => 1, 'price' => $plan->price, 'weight' => 1, 'options' => ['type' => CART_TYPE_SUBSCRIPTION, 'subscription_type' => MONTHLY, 'image' => null, 'storage_type' => null]])->associate('App\Models\Subscription');
                }
                // yearly
                if ($request->subscription_type == YEARLY) {
                    Cart::add(['id' => $plan->id, 'name' => $plan->title, 'qty' => 1, 'price' => $plan->price, 'weight' => 1, 'options' => ['type' => CART_TYPE_SUBSCRIPTION, 'subscription_type' => YEARLY, 'image' => null, 'storage_type' => null]])->associate('App\Models\Subscription');
                }
            }
        }

        $response = $this->responseArray('Item added to the cart!', 200, Cart::count());

        return response()->json($response);
    }

    public function checkCartExist($object, $type)
    {
        // Check if an item with the same type and ID exists in the cart
        return Cart::search(function ($cartItem, $rowId) use ($object, $type) {
            return $cartItem->id == $object->id && $cartItem->options->type == $type;
        });
    }

    public function checkCartCochingSlotExist($object, $date)
    {
        // Check if an item with the same type and ID exists in the cart
        return Cart::search(function ($cartItem, $rowId) use ($object, $date) {
            return $cartItem->id == $object->id && $cartItem->options->date == $date;
        });
    }

    public function checkApiCartExist($type)
    {
        // Check if an item with the same type and ID exists in the cart
        return Cart::search(function ($cartItem, $rowId) use ($type) {
            return $cartItem->options->type == $type;
        });
    }

    public function checkSubscriptionCartExist($type)
    {
        // Check if an item with the same type and ID exists in the cart
        return Cart::search(function ($cartItem, $rowId) use ($type) {
            return $cartItem->options->type == $type;
        });
    }

    public function responseArray($msg, $status, $cartCount = null): array
    {
        $response['msg'] = $msg;
        $response['status'] = $status;

        if (! is_null($cartCount)) {
            $response['cart_count'] = $cartCount;
        }

        return $response;
    }

    public function removeCartItem($rowId)
    {
        Cart::remove($rowId);
        record_created_flash('Item Remove from Cart');

        return back();
    }

    public function cancelOrder()
    {
        Cart::destroy();

        return redirect()->route('front.home');
    }

    public function applyCoupon(Request $request)
    {
        if (! Auth::check()) {
            return response()->json(['status' => 401, 'message' => 'You need to login first!']);
        }

        $couponCode = $request->input('coupon_code');
        $itemId = $request->input('item_id');

        $cartItem = Cart::get($itemId);
        if (! $cartItem) {
            return response()->json(['status' => 404, 'message' => 'Cart item not found.']);
        }

        $coupon = Coupon::where('coupon_code', $couponCode)->first();
        if (! $coupon) {
            return response()->json(['status' => 404, 'message' => 'Invalid coupon code.']);
        }

        // Check usage limit with CouponUsage
        $usageCount = CouponUsage::where('coupon_id', $coupon->id)->count();
        if ($coupon->maximum_use_limit !== null && $usageCount >= $coupon->maximum_use_limit) {
            return response()->json(['status' => 401, 'message' => 'Coupon usage limit has been reached.']);
        }

        $couponMessage = null;
        if ($coupon->isValidForPlan($cartItem->model, $cartItem->options['type'], $couponMessage)) {
            $discount = $this->calculateDiscount($cartItem->price, $coupon);
            $newPrice = $cartItem->price - $discount;

            Cart::update($cartItem->rowId, [
                'price' => $newPrice,
                'options' => array_merge((array) $cartItem->options->toArray(), [
                    'coupon_code' => $couponCode,
                    'discount' => $discount,
                    'original_price' => $cartItem->price,
                ]),
            ]);

            // Record the usage of the coupon
            CouponUsage::create([
                'coupon_id' => $coupon->id,
                'user_id' => Auth::id(),
            ]);

            $totalDiscount = Cart::content()->sum(function ($item) {
                return $item->options['discount'] ?? 0;
            });

            $totalPrice = number_format((float) Cart::total(), 2, '.', '');

            return response()->json([
                'status' => 200,
                'message' => 'Coupon applied successfully.',
                'data' => [
                    'new_price' => number_format((float) $newPrice, 2, '.', ''),
                    'total_discount' => number_format((float) $totalDiscount, 2, '.', ''),
                    'total_price' => $totalPrice,
                    'new_row_id' => $cartItem->rowId,
                ],
            ]);
        } else {
            return response()->json(['status' => 401, 'message' => $couponMessage ?: 'Coupon cannot be applied to this item.']);
        }
    }

    protected function calculateDiscount($price, $coupon)
    {
        return $price * ($coupon->percentage / 100);
    }

    public function removeCoupon(Request $request)
    {
        if (! Auth::check()) {
            return response()->json(['status' => 401, 'message' => 'You need to login first!']);
        }

        $itemId = $request->input('item_id');

        $cartItem = Cart::get($itemId);
        if (! $cartItem) {
            return response()->json(['status' => 404, 'message' => 'Cart item not found.']);
        }

        // Reset the price to the original price before the coupon was applied
        $couponCode = $cartItem->options->coupon_code ?? null;
        $coupon = Coupon::where('coupon_code', $couponCode)->first();
        $originalPrice = $cartItem->options->original_price ?? $cartItem->price;
        // Update the cart item to remove the coupon
        Cart::update($cartItem->rowId, [
            'price' => $originalPrice,
            'options' => array_merge($cartItem->options->toArray(), [
                'coupon_code' => null,
                'discount' => 0,
                'original_price' => $originalPrice,
            ]),
        ]);

        // Remove the coupon usage record
        if ($coupon) {
            CouponUsage::where('coupon_id', $coupon->id)
                ->where('user_id', Auth::id())
                ->delete();
        }

        // Recalculate total discount and total price
        $totalDiscount = Cart::content()->sum(function ($item) {
            return $item->options['discount'] ?? 0;
        });

        $totalPrice = number_format((float) Cart::total(), 2, '.', '');
        $totalDiscount = number_format((float) $totalDiscount, 2, '.', '');

        $updatedCartItem = Cart::get($cartItem->rowId);

        return response()->json([
            'status' => 200,
            'message' => 'Coupon removed successfully.',
            'data' => [
                'original_price' => number_format((float) $originalPrice, 2, '.', ''),
                'total_discount' => $totalDiscount,
                'total_price' => $totalPrice,
                'new_row_id' => $updatedCartItem->rowId,
            ],
        ]);
    }
}
