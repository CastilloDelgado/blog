<script setup>
import { ref } from 'vue'
import {
  TransitionRoot,
  TransitionChild,
  Dialog,
  DialogPanel,
  DialogTitle,
} from '@headlessui/vue'
import CustomButton from './CustomButton.vue';

const isOpen = ref(false)

function closeModal() {
  isOpen.value = false
}
function openModal() {
  isOpen.value = true
}

defineProps({
    product: {
        type: Object,
        required: true
    }
})

</script>

<template>
    <div class="bg-primary-200 rounded-lg text-center w-full sm:w-1/2 lg:w-1/4 hover:scale-[102%] transition h-max grid grid-cols-1 content-between">
        <div class="w-full object-cover flex justify-center mb-2 h-full">
            <img class="rounded-t-lg h-80 w-full object-cover" :src="product.image" />
        </div>
        <div class="p-4">
            <b class="text-primary-600 font-bold text-2xl mb-8">{{ product.title }}</b>
            <p class="text-primary-800 text-center mt-4 mb-2" v-if="product.description">{{ product.description }}</p>
            <div class="flex text-left px-4 mb-6 mt-4">
                <ul v-if="product.bullets" class="list-decimal">
                    <li v-for="bullet in product.bullets" class="mb-[1px] text-primary-900">{{ bullet }}</li>
                </ul>
            </div>
            <CustomButton class="bg-primary-600 hover:bg-primary-700 text-primary-100 mb-6" title="Más información" :action="openModal"/>
        </div>
    </div>
    <TransitionRoot appear :show="isOpen" as="template">
      <Dialog as="div" @close="closeModal" class="relative z-10">
        <TransitionChild
          as="template"
          enter="duration-300 ease-out"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="duration-200 ease-in"
          leave-from="opacity-100"
          leave-to="opacity-0"
        >
          <div class="fixed inset-0 bg-black/25" />
        </TransitionChild>
  
        <div class="fixed inset-0 overflow-y-auto">
          <div
            class="flex min-h-full items-center justify-center p-4 text-center"
          >
            <TransitionChild
              as="template"
              enter="duration-300 ease-out"
              enter-from="opacity-0 scale-95"
              enter-to="opacity-100 scale-100"
              leave="duration-200 ease-in"
              leave-from="opacity-100 scale-100"
              leave-to="opacity-0 scale-95"
            >
              <DialogPanel
                class="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all"
              >
                <DialogTitle
                  as="h3"
                  class="text-lg font-medium leading-6 text-gray-900"
                >
                  Payment successful
                </DialogTitle>
                <div class="mt-2">
                  <p class="text-sm text-gray-500">
                    Your payment has been successfully submitted. We’ve sent you
                    an email with all of the details of your order.
                  </p>
                </div>
  
                <div class="mt-4">
                  <button
                    type="button"
                    class="inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                    @click="closeModal"
                  >
                    Got it, thanks!
                  </button>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </Dialog>
    </TransitionRoot>
  </template>
