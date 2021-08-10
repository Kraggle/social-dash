// @ts-nocheck

/**
 * @namespace Chart
 */
import Chart from './src/core/core.controller.js';

import * as helpers from './src/helpers/index.js';
import _adapters from './src/core/core.adapters.js';
import Animation from './src/core/core.animation.js';
import animator from './src/core/core.animator.js';
import Animations from './src/core/core.animations.js';
import * as controllers from './src/controllers/index.js';
import DatasetController from './src/core/core.datasetController.js';
import Element from './src/core/core.element.js';
import * as elements from './src/elements/index.js';
import Interaction from './src/core/core.interaction.js';
import layouts from './src/core/core.layouts.js';
import * as platforms from './src/platform/index.js';
import * as plugins from './src/plugins/index.js';
import registry from './src/core/core.registry.js';
import Scale from './src/core/core.scale.js';
import * as scales from './src/scales/index.js';
import Ticks from './src/core/core.ticks.js';

// import Zoom from './plugins/zoom/index.esm.js';

// Register built-ins
Chart.register(
	elements.ArcElement,
	elements.LineElement,
	elements.BarElement,
	elements.PointElement,
	controllers.BarController,
	controllers.BubbleController,
	controllers.DoughnutController,
	controllers.LineController,
	controllers.PieController,
	controllers.PolarAreaController,
	controllers.RadarController,
	controllers.ScatterController,
	scales.CategoryScale,
	scales.LinearScale,
	scales.LogarithmicScale,
	scales.RadialLinearScale,
	scales.TimeScale,
	scales.TimeSeriesScale,
	plugins.Decimation,
	plugins.Filler,
	plugins.Legend,
	plugins.Title,
	plugins.Tooltip,
	plugins.SubTitle,
	// Zoom
);
// Chart.register(controllers, scales, elements, plugins);

Chart.helpers = { ...helpers };
Chart._adapters = _adapters;
Chart.Animation = Animation;
Chart.Animations = Animations;
Chart.animator = animator;
Chart.controllers = registry.controllers.items;
Chart.DatasetController = DatasetController;
Chart.Element = Element;
Chart.elements = elements;
Chart.Interaction = Interaction;
Chart.layouts = layouts;
Chart.platforms = platforms;
Chart.Scale = Scale;
Chart.Ticks = Ticks;

// Compatibility with ESM extensions
Object.assign(Chart, controllers, scales, elements, plugins, platforms);
Chart.Chart = Chart;

if (typeof window !== 'undefined') {
	window.Chart = Chart;
}

export default Chart;
