<?php

function redirect($pages){
    header('location:' .URLROOT . '/' . $pages);
}