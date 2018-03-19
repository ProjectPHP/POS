@extends('master')
@section('title','Home Page')   
@section('content')
    <h1>Welcome to home page</h1>
    <form action = "/register" method = "post">
        
      
         <table>
            <tr>
               <td>Name</td>
               <td><input type = "text" name = "name" /></td>
            </tr>
               <td colspan = "2" align = "center">
                  <input type = "submit" value = "Register" />
               </td>
            </tr>
         </table>
      
      </form>
@endsection
