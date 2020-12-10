@extends('layouts.app')

<form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="profile_img">
</form>