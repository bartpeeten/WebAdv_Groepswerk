<?php
/**
 * Created by PhpStorm.
 * User: bpeeten
 * Date: 30/10/17
 * Time: 21:01
 */

interface ContactRepository
{
    public function findContactById($id);
    public function findContacts();

}