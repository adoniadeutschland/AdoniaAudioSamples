import AdoniaAudioSamples from "./AdoniaAudioSamples/AdoniaAudioSamples.plugin";

const PluginManager = window.PluginManager;
PluginManager.register(
  "AdoniaAudioSamples",
  () => import("./AdoniaAudioSamples/AdoniaAudioSamples.plugin"),
  "[audiosample-plugin]",
);

if (module.hot) {
  module.hot.accept();
}
