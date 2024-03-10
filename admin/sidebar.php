<div class="w-64 mt-4 ml-4">
                <a href="index.php" class="block px-4 py-2 bg-black text-white rounded mb-2">Dashbord</a>
                <a href="manage_students.php" class="block px-4 py-2 bg-white text-black rounded mb-2">Manage students
                    <span>(<?= countRecords('students',"status='1'");?>)</span>
                </a>
                <a href="manage_admission.php" class="block px-4 py-2 bg-white text-black rounded mb-2">Manage Admission
                <span>(<?= countRecords('students',"status='0'");?>)</span>
                </a>
                <a href="manage_courses.php" class="block px-4 py-2 bg-white text-black rounded mb-2"> Manage courses
                <span>(<?= countRecords('course');?>)</span>
                </a>
                <a href="manage_categories.php" class="block px-4 py-2 bg-white text-black rounded mb-2"> Manage Categories
                <span>(<?= countRecords('categories');?>)</span>
                </a>
</div>