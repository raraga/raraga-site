<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    project: {
        title: string;
        description: string;
        extendedDescription: string;
        image: string;
        slug: string;
        url: string;
        pictures: Array<string>;
        links: Array<string>;
    };
}>();

</script>

<template>
    <div class="pt-16 bg-sky-950 min-h-screen">
        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <Link
                    href="/"
                    class="mb-8 font-bold inline-flex items-center text-md
                    text-gray-300 hover:text-sky-500"
                >
                    <svg
                        class="mr-2 h-4 w-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>
                    Back to Projects
                </Link>

                <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-2">
                    <div class="order-2 lg:order-1">
                        <h1 class="mb-4 text-4xl font-bold text-white">
                            {{ project.title }}
                        </h1>
                        <p class="mb-6 text-lg text-gray-300">
                            {{ project.description }}
                        </p>
                        <a
                            :href="project.url"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center rounded-full bg-cyan-800 px-8 py-3 text-sm font-semibold text-white shadow-md transition-colors hover:bg-cyan-900"
                        >
                            Visit Website
                            <svg
                                class="ml-2 h-4 w-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                />
                            </svg>
                        </a>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="overflow-hidden rounded-2xl shadow-lg">
                                <img
                                    :src="'../'+ project.image"
                                    :alt="project.title"
                                    class="h-64 w-full object-cover object-top sm:h-80"
                                />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 py-8 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <div class="rounded-2xl bg-sky-900 p-6 sm:p-8">
                    <h2 class="mb-4 text-2xl font-semibold text-white">
                        About This Project
                    </h2>
                    <p class="leading-relaxed text-gray-300">
                        {{ project.extendedDescription }}
                    </p>
                </div>
            </div>
        </div>

        <div class="px-6 py-8 pb-16 lg:px-8">
            <div class="mx-auto max-w-7xl">
                <h2 class="mb-6 text-2xl font-semibold text-white">
                    Project Gallery
                </h2>
                <div
                    class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3"
                >
                    <div
                        v-for="(img, index) in project.pictures"
                        :key="index"
                        class="aspect-video overflow-hidden rounded-xl shadow-lg"
                    >

                        <a :href="project.links[index]" target="_blank">
                            <img
                                :src="'../'+ img"
                                :alt="`${project.title} screenshot ${index + 1}`"
                                class="h-full w-full object-cover object-top"
                            />
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
