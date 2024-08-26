<template>

  <Head title="Contacto" />

  <div>
    <Nav />
    <h1 class="text-5xl text-center uppercase py-5 font-bold">contacto</h1>
    <div id="obras" class="flex flex-col items-center">
      <div class="bg-black w-[5px] h-[88px]"></div>

      <div class="md:w-2/3 border-2 border-black p-10 my-10 flex flex-col justify-center">

        <div class="flex flex-col w-full bg-gray-500 p-5">


          <form @submit.prevent="handleSubmit">

            <div class="grid grid-cols-2 gap-5 mx-5 my-5">

              <div class="col-span-2 md:col-span-1 flex flex-col justify-center items-center">

                <div class="w-full">

                  <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required
                    autocomplete="name" placeholder="Nombre" />
                  <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="w-full">

                  <TextInput id="email" type="text" class="mt-1 block w-full" v-model="form.email" required
                    autocomplete="email" placeholder="Correo electronico" />
                  <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="w-full">

                  <TextInput id="phone" type="text" class="mt-1 block w-full" v-model="form.phone" required
                    autocomplete="phone" placeholder="Telefono" />
                  <InputError class="mt-2" :message="form.errors.phone" />
                </div>

              </div>

              <div class=" col-span-2 md:col-span-1 flex flex-col justify-center items-center">

                <div class="w-full">

                  <TextArea id="msg" class="mt-1 block w-full" v-model="form.msg" required rows="5" autocomplete="msg"
                    name="msg" placeholder="Mensaje" />
                  <InputError class="mt-2" :message="form.errors.msg" />
                </div>

              </div>

            </div>


            <div class="flex items-center justify-center mt-4">
              <button
                class="w-2/3 text-white bg-black rounded-md uppercase py-2 px-6 font-bold hover:-translate-y-1 hover:scale-110 duration-500 ease-in-out">
                Enviar
              </button>
            </div>
          </form>





        </div>


        <div class="flex justify-center py-10">
          <ul class="flex flex-col items-center text-center md:flex-row gap-10 font-bold text-xl">
            <li>+598 98 447 351</li>
            <li>MOTEVIDEO, URUGUAY</li>
            <li>POCITOS</li>
          </ul>
        </div>

        <div style="height:300px">
          <GoogleMap :api-key="googleKey" class="w-full h-full" :center="center" :zoom="15">
            <Marker :options="{ position: center }" />
          </GoogleMap>

        </div>

      </div>
    </div>
    <Footer />
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Head } from '@inertiajs/vue3'
import Nav from '@/Components/Custom/nav.vue'
import Footer from '@/Components/Custom/footer.vue'
import { GoogleMap, Marker } from 'vue3-google-map'
import InputError from '@/Components/InputError.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { useForm } from '@inertiajs/vue3';


// import emailjs from '@emailjs/browser';


onMounted(() => {
  window.scrollTo(0, 0)
})


const form = useForm({
  name: '',
  email: '',
  phone: '',
  msg: ''
});


const mensaje = ref('')
const googleKey = 'AIzaSyBRfPVtvsWaNyzXgJ3OS46gFDVvhP9GhOY'
const center = { lat: -34.9043527, lng: -56.1518685 }


const sendEmail = () => {
  emailjs.sendForm('service_gzh580i', 'template_dftkgli', '#contactForm', 'XFiP0z73yV6l3viAI')
}


const handleSubmit = async () => {
  try {
    await sendEmail();
    mensaje.value = 'Mensaje Enviado';

    reset("contactForm");
  } catch (error) {
    mensaje.value = 'Error al enviar el Mensaje';
  }
}


</script>
