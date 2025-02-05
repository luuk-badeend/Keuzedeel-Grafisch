<x-layout>
    <div class="flex flex-col gap-64 items-center">
        <x-hero></x-hero>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center">

            @foreach ([
        ['title' => 'Portfolio Website', 'technologies' => ['HTML', 'CSS', 'JavaScript', 'TailwindCSS'], 'description' => 'A personal portfolio website to showcase my projects and skills. It includes a homepage, an about me section, and a contact form. The website is fully responsive and optimized for performance. It also features a blog section where I share my thoughts on web development.'],
        ['title' => 'Task Manager App', 'technologies' => ['JavaScript', 'React', 'Redux', 'TypeScript'], 'description' => 'A task management application to help users organize their tasks efficiently. It allows users to create, edit, and delete tasks. The app also supports task prioritization and categorization. Users can set deadlines and receive notifications for upcoming tasks.'],
        ['title' => 'E-commerce Platform', 'technologies' => ['PHP', 'Laravel', 'MySQL', 'Docker'], 'description' => 'An e-commerce platform for buying and selling products online. It includes features such as product listings, shopping cart, and checkout process. The platform supports multiple payment gateways and shipping options. It also has an admin panel for managing products, orders, and users.'],
        ['title' => 'Social Media API', 'technologies' => ['Node.js', 'Express', 'MongoDB', 'GraphQL'], 'description' => 'A social media API to support various social media functionalities. It allows users to create and manage profiles, post updates, and follow other users. The API also supports real-time notifications and messaging. It is designed to be scalable and secure, with robust authentication and authorization mechanisms.'],
    ] as $project)
                <x-project text="{{ $project['description'] }}" title="{{ $project['title'] }}" :technologies="$project['technologies']"
                    class="mx-auto w-full max-w-4xl bg-white shadow-lg rounded-lg p-6 mb-6 hover:shadow-xl transition duration-300">
                    {{ $project['description'] }}
                </x-project>
            @endforeach
        </div>
    </div>
</x-layout>
