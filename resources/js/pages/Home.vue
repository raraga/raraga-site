<script setup lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const profileImage = ref('storage/s.jpg');
const projects = [
    {
        title: 'BK Precision',
        description:
            'For over 70 years, B&K Precision is a leading provider in test and measurement solutions.',
        image: 'storage/bk-home.jpg',
        slug: 'bk-precision',
    },
    {
        title: 'MyBK',
        description:
            'MyBK is a customer portal made to provide continued product support for B&K customers. From RMAs, calibrations and extended warranties.',
        image: 'storage/mybk-home.jpg',
        slug: 'mybk',
    },
];
</script>
<template>
    <div class="min-h-screen bg-sky-950 pt-16">
        <div class="relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div
                    class="flex flex-col items-center justify-center gap-12 lg:flex-row lg:gap-20"
                >
                    <div class="order-2 text-center lg:order-1 lg:text-left">
                        <h1
                            class="text-5xl font-bold tracking-tight text-gray-100 sm:text-6xl lg:text-7xl dark:text-white"
                        >
                            Hi! I'm Renato Araga.
                        </h1>
                        <p
                            class="mt-6 max-w-xl text-lg text-gray-200 sm:text-xl"
                        >
                            Motivated and forever curious developer with 10+
                            years of experience. I'm eager to provide solutions
                            that are sustainable, cost-effective and accessible
                            for everyone.
                        </p>
                        <div
                            class="mt-10 flex flex-col justify-center gap-4 hover:cursor-pointer sm:flex-row lg:justify-start"
                        >
                            <a
                                href="#"
                                class="flex items-center gap-2 rounded-full bg-cyan-800 px-8 py-3 text-sm font-semibold text-white shadow-md transition-colors hover:bg-cyan-900"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                    />
                                </svg>
                                Resume</a
                            >
                            <a
                                href="https://github.com/raraga"
                                class="flex items-center gap-2 rounded-full border border-gray-300 bg-white px-8 py-3 text-sm font-semibold text-gray-700 transition-colors hover:bg-gray-400 hover:text-gray-700"
                                target="_blank"
                            >
                                <svg
                                    class="h-4 w-4"
                                    fill="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.46-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0012 2z"
                                    />
                                </svg>
                                Github</a
                            >
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div
                            class="relative h-64 w-64 sm:h-80 sm:w-80 lg:h-96 lg:w-96"
                        >
                            <div
                                class="absolute inset-0 rounded-full border-4 border-sky-900"
                            ></div>
                            <div
                                class="absolute inset-2 overflow-hidden rounded-full"
                            >
                                <img
                                    :src="profileImage"
                                    alt="Profile"
                                    class="h-full w-full object-cover"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h2 class="mb-12 text-center text-3xl font-semibold text-white">
                    Featured Projects
                </h2>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div
                        v-for="project in projects"
                        :key="project.title"
                        class="group rounded-2xl bg-gray-50 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:cursor-pointer hover:shadow-md dark:bg-gray-800"
                    >
                        <Link :href="route('view.project', project.slug)">
                            <div
                                class="mb-4 h-40 overflow-hidden rounded-xl border-2 border-gray-300 bg-gray-400"
                            >
                                <img
                                    v-if="project.image"
                                    :src="project.image"
                                    :alt="project.title"
                                    class="h-full w-full object-cover object-top"
                                />
                            </div>
                            <h3
                                class="text-lg font-semibold text-gray-900 dark:text-white"
                            >
                                {{ project.title }}
                            </h3>
                            <p
                                class="mt-2 text-sm text-gray-600 dark:text-gray-400"
                            >
                                {{ project.description }}
                            </p>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h2
                    class="mb-12 text-center text-3xl font-semibold text-gray-900 text-white"
                >
                    What else am I working on?
                </h2>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div
                        v-for="project in projects"
                        :key="project.title"
                        class="group rounded-2xl bg-gray-50 p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:cursor-pointer hover:shadow-md dark:bg-gray-800"
                        id="product.slug"
                    >
                        <div
                            class="mb-4 h-40 overflow-hidden rounded-xl border-2 border-gray-300 bg-gray-400"
                        >
                            <img
                                v-if="project.image"
                                :src="project.image"
                                :alt="project.title"
                                class="h-full w-full object-cover object-top"
                            />
                        </div>
                        <h3
                            class="text-lg font-semibold text-gray-900 dark:text-white"
                        >
                            {{ project.title }}
                        </h3>
                        <p
                            class="mt-2 text-sm text-gray-600 dark:text-gray-400"
                        >
                            {{ project.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
