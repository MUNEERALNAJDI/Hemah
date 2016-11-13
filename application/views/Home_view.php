<?php ?>


<html><head>
        <link href="../res/css/style.css" rel="stylesheet">
    </head>
    <body dir="rtl" class="rtl" cz-shortcut-listen="true">
        <div>
            <h1 class="h1">المهام النشطة</h1>
            <table class="table arabic">
                <thead>
                    <tr class="tr">
                        <th>رقم المهمة</th>
                        <th>المهمة</th>
                        <th>حالة المهمة</th>
                        <th>مدة المهمة</th>
                        <th>تسجيل الإحصائيات</th>
                        <th>عرض </th>

                        <th>تسليم المهمة</th>
                    </tr>
                </thead>
<?php foreach ($active_tasks as $active_task) { ?>
                <tr>
                    <td><?php echo $active_task->id; ?></td>
                    <td><?php echo $active_task->name ?></td>
                    <td><?php echo $active_task->status_name; ?> </td>
                    <td> <?php echo $active_task->duration_time; ?> </td>
                    <td><?php if($active_task->need_statistics ==0){
                        echo 'لا';
                    }
                    else{
                        echo 'نعم';
                    
                    }
                    ?>
                    </td>
                    <td><a href="#">تسليم</a></td>
                    <td><a href="#">تفاصيل</a></td>
                </tr>
<?php }?>
            </table>
        </div>
        <div>
            
            <h1 class="h1">  تفاصيل المهمة</h1>

            <table class="table arabic">
                <tr>
                    <th>رقم المهمة</th>
                    <td><?php echo $detail_task->id; ?></td>


                </tr>
                <th>المهمة</th>
                <td><?php echo $detail_task->name; ?></td>
                <tr>
                </tr>
                <th>وقت الإسناد</th>
                <td><?php echo $detail_task->assigned_time; ?></td>
                <tr>
                </tr>
                <th>مدة المهمة</th>
                <td><?php echo $detail_task->duration_time; ?></td>
                <tr>
                </tr>
                <th>التاريخ المتوقع لإنتهاء المهمة</th>
                <td><?php echo $detail_task->end_date; ?></td>
                <tr>
                </tr>
                <th>وقت التسليم</th>
                <td><?php echo $detail_task->applied_time; ?></td>
                <tr>
                </tr>
                <th>تسجيل الإحصائيات</th>
                <td><?php if($detail_task->need_statistics ==0){
                        echo 'لا';
                    }
                    else{
                        echo 'نعم';
                    
                    }
                    ?></td>
                <tr>
                </tr>
                <th>الموظف المتابع</th>
                <td><?php echo $detail_task->monitor_name; ?></td>
                <tr>
                </tr>
                <th>حالة المهمة</th>
                <td><?php echo $detail_task->status_name; ?></td>
                <tr>
                </tr>
                <th>المشروع الرئيسي</th>
                <td><?php echo $detail_task->project_name; ?></td>
                <tr>
                </tr>
                <th>معلومات أخرى</th>
                <td><?php echo $detail_task->notes; ?></td>
                <tr>


                </tr>



            </table>
        </div>


        <div>
            <h1 class="h1">طلب إسناد مهمة </h1>
            <form >
            <table class="table arabic">
                <thead>
                    <tr class="tr">
                        <th>المهمة</th>
                        <td><input type="text" placeholder="أدخل اسم المهمة"></td>
                    </tr>
                    <tr>
                        <th>مدة المهمة</th>
                        <td><input type="text" placeholder="كم تأخذ هذه المهمة من الوقت"></td>
                    </tr>
                    <tr>
                        <th>التاريخ المتوقع لإنتهاء المهمة</th>
                        <td><input type="text" placeholder="٠١-٠٩-٢٠١٣"></td>
                    </tr>
                    <tr>
                        <th>تسجيل الإحصائيات</th>
                        <td><input type="text" placeholder="هل هناك إحصائيات خاصة"></td>
                    </tr>
                    <tr>
                        <th>المشروع الرئيسي </th>
                        <td><input type="text" placeholder="أدخل اسم المشروع الرئيسي"></td>
                    </tr>

                    </tr>
                </thead>

                <tr>
                    <th>  معلومات أخرى</th>
                    <td><input type="text" placeholder="أدخل أي معلومات أخرى "></td>

                </tr>
            </table>
                <input type="submit" value="تقديم " class="btn btn-primary btn-block" >
            </form>
        </div>
    </body>
</html>


<?php ?>