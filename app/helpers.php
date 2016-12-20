<?php

function flash($message, $style = 'flash-good')
{
    session()->flash('flash-message', $message);
    session()->flash('flash-style', $style);
}