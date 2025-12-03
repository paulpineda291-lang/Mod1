<?php

function computeSubtotal($items, $cost) {
    return $items * $cost;
}

function computeTax($subtotal, $rate = 20) {
    return ($subtotal / 100) * $rate;
}

function computeDiscount($subtotal) {
    return ($subtotal > 20) ? $subtotal * 0.10 : 0;
}

function computeTotal($subtotal, $tax, $discount = 0, $bonus = 0) {
    return $subtotal + $tax + $bonus - $discount;
}

?>
