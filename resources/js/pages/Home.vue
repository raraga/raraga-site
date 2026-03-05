<script setup lang="ts">
import { ref } from 'vue';

const profileImage = ref('storage/s.jpg');
const projects = [
    {
        title: 'Project One',
        description: 'Description of the first project goes here.',
    },
    {
        title: 'Project Two',
        description: 'Description of the second project goes here.',
    },
];
</script>
<template>
    <div class="min-h-screen bg-white dark:bg-gray-900">
        <div class="relative overflow-hidden bg-gradient-to-b from-indigo-100/20 to-transparent py-16 dark:from-indigo-950/10" >
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col items-center justify-center gap-12 lg:flex-row lg:gap-20">
                    <div class="order-2 text-center lg:order-1 lg:text-left">
                        <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-6xl lg:text-7xl dark:text-white">
                            Hi! I'm Renato Araga.
                        </h1>
                        <p class="mt-6 max-w-xl text-lg text-gray-600 sm:text-xl dark:text-gray-300">
                            Motivated and forever curious developer with 10+ years of experience. I'm eager to provide solutions that are sustainable, cost-effective and accessible for everyone.
                        </p>
                        <div class="mt-10 flex flex-col justify-center gap-4 hover:cursor-pointer sm:flex-row lg:justify-start">
                            <a href="#" class="rounded-full bg-indigo-600 px-8 py-3 text-sm font-semibold text-white shadow-md transition-colors hover:bg-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-400">Resume</a>
                            <a href="#" class="rounded-full border border-gray-300 px-8 py-3 text-sm font-semibold text-gray-700 transition-colors hover:bg-gray-50 dark:border-gray-600 dark:text-gray-200 dark:hover:bg-gray-800">Github</a>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="relative h-64 w-64 sm:h-80 sm:w-80 lg:h-96 lg:w-96">
                            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 dark:from-indigo-600 dark:to-purple-700"></div>
                            <div class="absolute inset-2 overflow-hidden rounded-full bg-gray-200 dark:bg-gray-700" >
                                <img :src="profileImage" alt="Profile" class="h-full w-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-white dark:from-gray-900"></div>
        </div>
        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h2 class="mb-12 text-center text-3xl font-semibold text-gray-900 dark:text-white">Featured Projects</h2>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div
                        v-for="project in projects"
                        :key="project.title"
                        class="group rounded-2xl bg-gray-50 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md dark:bg-gray-800 hover:cursor-pointer"
                    >
                        <div class="mb-4 h-40 rounded-xl bg-gray-400"></div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ project.title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            {{ project.description }}
                        </p>
                    </div>
                </div>

                </div>
            </div>
        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h2 class="mb-12 text-center text-3xl font-semibold text-gray-900 dark:text-white">Current Projects</h2>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div
                        v-for="project in projects"
                        :key="project.title"
                        class="group rounded-2xl bg-gray-50 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md dark:bg-gray-800 hover:cursor-pointer"
                    >
                        <div class="mb-4 h-40 rounded-xl bg-gray-400"></div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ project.title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ project.description }}</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
</template>
