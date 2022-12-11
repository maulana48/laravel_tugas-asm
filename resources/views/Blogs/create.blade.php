@extends('components.parent')
@section('content')
<!-- component -->
	<div class="d-flex my-4">
		<h1 class="text-center text-green-300 text-[30px] font-bold">Create new post</h1>
	</div>
    <div class="mb-4">
        <a href="{{ route('blog.index') }}" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Back to home</a>
    </div>
	<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
		style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="sm:max-w-lg min-w-full p-10 bg-white rounded-xl z-10">
			<div class="text-center">
				<h2 class="mt-5 text-3xl font-bold text-gray-900">
					Create Post!
				</h2>
				<p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
			</div>
			<form class="mt-8 space-y-3" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
						<div class="grid grid-cols-1 space-y-2">
							<label for="title" class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
								<input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="Insert post title" @error('title') is-invalid @enderror" name="title" id="title" required autofocus value="{{ old('title') }}">

							@error('title')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label for="slug" class="text-sm font-bold text-gray-500 tracking-wide">Slug</label>
								<input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="slug" @error('slug') is-invalid @enderror" name="slug" id="slug" required autofocus value="{{ old('slug') }}">

							@error('slug')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label for="user_id" class="text-sm font-bold text-gray-500 tracking-wide">Select User</label>
                                <select class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" name="user_id" id="user">
                                        <option disabled @if(!old('user_id')) selected @endif> -- select an option -- </option>
                                    @foreach($users as $user)
                                        @if(old('user_id') == $user->id))
                                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                        @else
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                    @endforeach
                                </select>

							@error('user_id')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label for="category_id" class="text-sm font-bold text-gray-500 tracking-wide">Select Category</label>
                                <select class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" name="category_id" id="category">
                                        <option disabled @if(!old('category_id')) selected @endif> -- select an option -- </option>
                                    @foreach($categories as $category)
                                        @if(old('category_id') == $category->id))
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>

							@error('category_id')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label for="body" class="text-sm font-bold text-gray-500 tracking-wide">Body</label>
								<textarea class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text" placeholder="" @error('body') is-invalid @enderror name="body" id="body" required autofocus value="{{ old('body') }}"></textarea>

							@error('body')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						
						<div class="grid grid-cols-1 space-y-2">
							<label for="image" class="text-sm font-bold text-gray-500 tracking-wide">Add Image</label>
							<div class="form-image flex items-center justify-center w-full">
								<label for="" class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
									<div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
										<div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10 justify-center">
										<img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
										</div>
										<p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
									</div>
									<input type="file" name="image" id="image" class="hidden">
								</label>
							</div>
						</div>
								<p class="text-sm text-gray-300">
									<span>File type: doc,pdf,types of images</span>
								</p>
						<div>
							<button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full
										font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
							Create
						</button>
						</div>
			</form>
		</div>
	</div>

	<style>
		.has-mask {
			position: absolute;
			clip: rect(10px, 150px, 130px, 10px);
		}
	</style>
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");
        const image = document.querySelector(".form-image");

        title.addEventListener("keyup", function() {
            let preslug = title.value;			
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();	
        });

        image.addEventListener("click", function() {
            document.getElementById('image').click()
         });
		
    </script>
@endsection
