$(document).ready(function(){
    $(".form-signup").validate({
        rules:{
            login:{
                required: true,
                minlenght: 4,
                maxlenght: 16, 
            },
            password:{
                required: true,
                minlenght: 8,
                maxlenght: 16, 
            },
            password2:{
                required: true,
                minlenght: 8,
                maxlenght: 16, 
                equalTo: "#password"
            }
        },
        message:{
            login:{
                required: "Поле email обязательно для заполнения",
                minlenght: "Длина имени должна быть больше 4-ёх символов",
                maxlenght: "Длина имени должна быть не больше 16-ти символов", 
            },
            password:{
                required: "Поле password обязательно для заполнения",
                minlenght: "Длина имени должна быть больше 8-ёх символов",
                maxlenght: "Длина имени должна быть не больше 16-ти символов", 
            },
            password2:{
                required: "Поле confirm password обязательно для заполнения",
                minlenght: "Длина имени должна быть больше 8-ёх символов",
                maxlenght: "Длина имени должна быть не больше 16-ти символов", 
            },
        }
    });
    // $(".form-signin").validate({
    //     rules:{
    //         login:{
    //             required: true,
    //             minlenght: 4,
    //             maxlenght: 20, 
    //         },
    //         password:{
    //             required: true,
    //             minlenght: 8,
    //             maxlenght: 20, 
    //         }
    //     }
    // });
});