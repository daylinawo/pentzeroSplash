<template>
	<div>
		<router-view></router-view>
	</div>
</template>

<script>
	import Test from '../vue/test.vue'
	import Hello from '../vue/hello.vue'

	export default {
      components: {
		'test': Test,
		'hello': Hello,
      },
	}
</script>