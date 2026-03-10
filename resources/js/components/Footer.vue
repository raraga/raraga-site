<script setup lang="ts">
const linkedInUrl = 'https://www.linkedin.com/in/renato-araga-2459b920';
const email = 'raraga@gmail.com';
</script>

<template>
    <footer class="border-t border-sky-900 bg-sky-800">
        <div class="mx-auto max-w-7xl p-6 py-12 lg:px-8">
            <div class="flex flex-col items-center text-center">
                <h3 class="mb-2 text-xl font-semibold text-white">
                    Would you like to contact me for work?
                </h3>
                <p class="mb-6 text-gray-300">
                    Email me or reach me through my social networks.
                </p>
                <div class="flex gap-4">
                    <a
                        :href="`mailto:${email}`"
                        class="flex items-center gap-2 border-2 border-white rounded-full px-6 py-2.5 text-sm font-semibold text-white shadow-md transition-colors hover:bg-cyan-900"
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
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            />
                        </svg>
                        Email Me
                    </a>
                    <a
                        :href="linkedinUrl"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center gap-2 rounded-full bg-blue-700 px-6 py-2.5 text-sm font-semibold text-white shadow-md transition-colors hover:bg-blue-800"
                    >
                        <svg
                            class="h-4 w-4"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                            />
                        </svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
