
<?php $__env->startSection('content'); ?>

<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-4" href="<?php echo e(route('blog.index')); ?>">Home</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="<?php echo e(route('blog.create')); ?>">Create</a>
                </li>
            </ul>
        </nav>

        <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>

</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
            Minimal Blog
        </a>
        <p class="text-lg text-gray-600">
            Lorem Ipsum Dolor Sit Amet
        </p>
    </div>
</header>

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <?php if(asset($post->image)): ?>
                <img src="<?php echo e(asset($post->image)); ?>">
                <?php else: ?>
                <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                <?php endif; ?>
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"><?php echo e($post->category->name); ?></a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"><?php echo e($post->title); ?></a>
                <p href="#" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800"><?php echo e($u = $post->user); ?></a>, Published on <?php echo e($post->created_at->diffForHumans()); ?>

                </p>
                <a href="#" class="pb-6"><?php echo e($post->excerpt); ?>...</a>
                <a href="<?php echo e(route('blog.show', $post->id)); ?>" class="uppercase text-gray-800 hover:text-black">Continue
                    Reading <i class="fas fa-arrow-right"></i></a>
            </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Pagination -->
        <div class="flex items-center py-8">
            <?php echo e($posts->links()); ?>

        </div>

    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">About Us</p>
            <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
            <a href="#"
                class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Get to know us
            </a>
        </div>
    </aside>

</div>

<footer class="w-full border-t bg-white pb-12">

    <div class="mx-auto pt-10">
        <div class="text-center">
            <h1 class="font-bold text-2xl">New Updates</h1>
        </div>
        <div class="flex justify-center flex-col md:flex-row gap-10 md:gap-5 pt-10 px-10">
            <div class="
        overflow-hidden
        shadow-lg
        transition
        duration-500
        ease-in-out
        transform
        hover:shadow-2xl
        rounded-lg
        md:w-80
      ">
                <img alt="blog photo"
                    src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="max-h-40 w-full object-cover" />
                <div class="bg-white w-full p-4">
                    <a href="#" class="text-green-600 text-2xl font-medium">Should You Get Online Education?</a>
                    <p class="text-gray-800 text-sm font-medium mb-2">
                        A comprehensive guide about online education.
                    </p>
                    <p class="text-gray-600 font-light text-md">
                        It is difficult to believe that we have become so used to having
                        instant access to information at...
                        <a class="inline-flex text-green-600" href="#">Read More</a>
                    </p>
                    <div class="
            flex flex-wrap
            justify-starts
            items-center
            py-3
            border-b-2
            text-xs text-white
            font-medium
          ">
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #online </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #internet </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500">
                            #education
                        </a>
                    </div>
                    <div class="flex items-center mt-2">
                        <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                            src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                        <div class="pl-2">
                            <div class="font-medium">Jean Marc</div>
                            <div class="text-gray-600 text-xs">CTO of Supercars</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="
        overflow-hidden
        shadow-lg
        transition
        duration-500
        ease-in-out
        transform
        hover:shadow-2xl
        rounded-lg
        md:w-80
      ">
                <img alt="blog photo"
                    src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="max-h-40 w-full object-cover" />
                <div class="bg-white w-full p-4">
                    <a href="#" class="text-green-600 text-2xl font-medium">Should You Get Online Education?</a>
                    <p class="text-gray-800 text-sm font-medium mb-2">
                        A comprehensive guide about online education.
                    </p>
                    <p class="text-gray-600 font-light text-md">
                        It is difficult to believe that we have become so used to having
                        instant access to information at...
                        <a class="inline-flex text-green-600" href="#">Read More</a>
                    </p>
                    <div class="
            flex flex-wrap
            justify-starts
            items-center
            py-3
            border-b-2
            text-xs text-white
            font-medium
          ">
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #online </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #internet </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500">
                            #education
                        </a>
                    </div>
                    <div class="flex items-center mt-2">
                        <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                            src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                        <div class="pl-2">
                            <div class="font-medium">Jean Marc</div>
                            <div class="text-gray-600 text-xs">CTO of Supercars</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="
        overflow-hidden
        shadow-lg
        transition
        duration-500
        ease-in-out
        transform
        hover:shadow-2xl
        rounded-lg
        md:w-80
      ">
                <img alt="blog photo"
                    src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="max-h-40 w-full object-cover" />
                <div class="bg-white w-full p-4">
                    <a href="#" class="text-green-600 text-2xl font-medium">Should You Get Online Education?</a>
                    <p class="text-gray-800 text-sm font-medium mb-2">
                        A comprehensive guide about online education.
                    </p>
                    <p class="text-gray-600 font-light text-md">
                        It is difficult to believe that we have become so used to having
                        instant access to information at...
                        <a class="inline-flex text-green-600" href="#">Read More</a>
                    </p>
                    <div class="
            flex flex-wrap
            justify-starts
            items-center
            py-3
            border-b-2
            text-xs text-white
            font-medium
          ">
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #online </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500"> #internet </a>
                        <a href="#" class="m-1 px-2 py-1 rounded bg-green-500">
                            #education
                        </a>
                    </div>
                    <div class="flex items-center mt-2">
                        <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                            src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                        <div class="pl-2">
                            <div class="font-medium">Jean Marc</div>
                            <div class="text-gray-600 text-xs">CTO of Supercars</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Us</a>
            <a href="#" class="uppercase px-3">Privacy Policy</a>
            <a href="#" class="uppercase px-3">Terms & Conditions</a>
            <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; myblog.com</div>
    </div>
</footer>

<script>
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\tugas-laravel\resources\views/Blogs/index.blade.php ENDPATH**/ ?>