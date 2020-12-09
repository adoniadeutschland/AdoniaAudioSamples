import AdoniaAudioSamples from "./AdoniaAudioSamples/AdoniaAudioSamples.plugin";

const PluginManager = window.PluginManager;
PluginManager.register("AdoniaAudioSamples", AdoniaAudioSamples);

if (module.hot) {
  module.hot.accept();
}
