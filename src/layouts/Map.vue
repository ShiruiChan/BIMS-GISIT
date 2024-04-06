<script setup lang="ts">
import {
  YandexMap,
  YandexMapDefaultFeaturesLayer,
  YandexMapDefaultSchemeLayer,
  YandexMapMarker,
  YandexMapDefaultMarker
} from 'vue-yandex-maps'
import type { LngLat } from '@yandex/ymaps3-types'
import { ref } from 'vue'
import { shallowRef } from 'vue'
import type { YMap } from '@yandex/ymaps3-types'
import { markers } from './markers.js'

const map = shallowRef<null | YMap>(null)
const openMarker = ref<null | number>(null)
</script>

<template>
  <yandex-map
    v-model="map"
    :settings="{
      location: {
        center: [129.43, 62.0],
        zoom: 5
      },
      showScaleInCopyrights: true,
      theme: 'dark'
    }"
    width="1000px"
    height="700px"
  >
    <yandex-map-default-scheme-layer />
    <yandex-map-default-features-layer />

    <yandex-map-default-marker
      v-for="(marker, index) in markers"
      :key="index"
      :settings="{
        coordinates: marker.coordinates,
        onClick: () => (openMarker = index),
        title: marker.title,
        subtitle: marker.type,
        color: '#00ff51',
        popup: { position: 'top', content: marker.content, hidesMarker: false }
      }"
    >
      <template #popup="{ close }">
        <div class="marker-popup" @click="close()">Click me to close popup</div>
      </template>
    </yandex-map-default-marker>
  </yandex-map>
</template>

<style scoped>
.marker-popup {
  background: #fff;
  border-radius: 10px;
  padding: 10px;
  color: black;
  cursor: pointer;
  font-size: 14px;
  white-space: nowrap;
}

.marker {
  background: rgb(100, 134, 100);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  cursor: pointer;
  color: #fff;
  padding: 10px 20px;
  white-space: nowrap;
}

.popup {
  position: absolute;
  top: calc(100% + 10px);
  background: #fff;
  border-radius: 10px;
  padding: 10px;
  color: black;
}
</style>