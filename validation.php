<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
    foreach($_POST as $key => $value)
    {
        $$key = trim(htmlspecialchars(htmlentities($value)));
    }
    $errors = [];
//validate name
    if(empty($name))
    {
        $errors['error_name']='Name is required';
    }
    elseif(strlen($name)<3)
    {
        $errors['error_name']='Name must be at least 3 characters';
    }
    elseif(is_numeric($name))
    {
        $errors['error_name']='Name must be string';
    }
    //validate description 

    if(empty($description))
    {
        $errors['error_description'] = "Description is required";
    }
    elseif(strlen($description)<3)
    {
        $errors['error_description'] = "Description must be at least 3 characters";
    }
    elseif(is_numeric($description))
    {
        $errors['error_description'] = "Description Must be a string";
    }

   //validate price
     if(empty($price))
     {
        $errors['error_price']="price is required";
     }
     else if($price<=0)
     {
        $errors['error_price']="price  Must be at least 1";
     }

     //validate discount
     if(empty($discount))
     {
        $errors['error_discount']='Discount is required';
     }
     else if($discount<0)
     {
        $errors['error_discount']='Discount  Must be at least 0';
     }
     else if($discount>100)
     {
        $errors['error_discount']='Discount  Must be less than 100';
     }
//validate image

     $image = $_FILES['image'];
     $image_name =$image['name'];
     $image_tmp_name=$image['tmp_name'];
     $image_error=$image['error'];
     $image_size = $image['size'];
     $image_type = $image['type'];

     $allowed_extentions = ['jpg','jpeg','png'];
     $allowed_mime_types = ['image/jpeg','image/png'];

     if(empty($image_name))
     {
        $errors['error_image']='Image Is Required';
     }
     else 
     {
        $arrayName =explode('.',$image_name);
        $extentionInRequest = end($arrayName);

        if(!in_array( $extentionInRequest,    $allowed_extentions))
        {
            $errors['error_image'] = 'Not Alloewd Extension';
        }
        else
        {
            $mimType = mime_content_type($image_tmp_name);
            if(!in_array( $mimType, $allowed_mime_types))
            {
                $errors['error_image'] = 'Not Alloewd Mim Type';
            }
            else 
            {
                if(  $image_size>3000)
                 {
                 $errors['error_image'] = 'Not Alloewd Size';
                 }
               else
                {
                    $finalName = rand(10000,20000).time().'.'.  $extentionInRequest;
                    move_uploaded_file($image_tmp_name,'img/'.$finalName);


                }
            }
        }

     }
     if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location:form.php');
        die;
    }
 else {
    $_SESSION['success'] = 'Data Added Successfully';
    $_SESSION['products'][] = [
        'product_name' => $name,
        'product_description' => $description,
        'product_price'=>$price,
        'product_discount'=>$discount,
        'product_image'=> $finalName ,
        'created_at' => date('Y-m-d H:i:s'),
    ];
    header('Location:table.php');
   }



}
?>
